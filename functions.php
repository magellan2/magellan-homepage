<?php

/**
 * Gets JSON from $url, parses it, and returns it as array.
 * 
 * @param $url
 * 
 */
function get_api_content(string $url)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Magellan Web Page');
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);

    if (! $json = curl_exec($ch)) {
        trigger_error(curl_error($ch));
    }
    curl_close($ch);
    $data = json_decode($json, true);
    return $data;
}

/**
 * Compares the 'version' property of two releases
 *
 * @param unknown $r1
 * @param unknown $r2
 * @return <0 if $r1 is before $r2, >0 if $r1 is after $r2, 0 otherwise
 */
function compare_release_version($r1, $r2)
{
    return compare_version($r1['version'], $r2['version']);
}

/**
 * Compares two semantic versions.
 *
 * compare_version("2.0.1", "2.1.0") < 0
 * compare_version("2.0.1-100", "2.0.1-99") > 0
 * compare_version("2.0.1-latest", "2.1.0") < 0
 * compare_version("2.0.1-alpha", "2.0.1-beta") < 0
 *
 * @param unknown $r1
 * @param unknown $r2
 * @return <0 if $r1 is before $r2, >0 if $r1 is after $r2, 0 otherwise
 */
function compare_version($v1, $v2)
{
    $da = $v1['major'] - $v2['major'];
    $di = $v1['minor'] - $v2['minor'];
    $dr = $v1['revision'] - $v2['revision'];
    if ($da != 0)
        return $da;
    if ($di != 0)
        return $di;
    if ($dr != 0)
        return $dr;
    if (isset($v1['build']) && isset($v2['build'])) {
        $db = $v1['build'] - $v2['build'];
        if ($db != 0)
            return $db;
    }

    if (empty($v1['pre']) && ! empty($v2['pre']))
        return 1;
    if (! empty($v1['pre']) && empty($v2['pre']))
        return 1;

    $ids1 = preg_split("/\./", $v1['pre']);
    $ids2 = preg_split("/\./", $v2['pre']);

    foreach ($ids1 as $index => $id1) {
        if (! isset($ids2[$index]))
            return 1;
        $id2 = $ids2[$index];

        if (is_int($id1) && ! is_int($id2))
            return - 1;
        if (! is_int($id1) && is_int($id2))
            return 1;
        $d = $id1 <=> $id2;
        if ($d != 0)
            return $d;
    }
    if (sizeof($ids2) > sizeof($ids1))
        return - 1;
    return 0;
}

/**
 * Internal use only.
 * Converts a numerical string representing a non-negative number. Otherwise returns 0.
 */
function convert_vnum($parts, $index)
{
    return count($parts) > $index && is_numeric($parts[$index]) && $parts[$index] + 0 > 0 ? $parts[$index] : 0;
}

/**
 * Converts a string like 1.0.3-123.type into a version with
 *
 * - 'major' 1
 * - 'minor' 0
 * - 'revision' 3
 * - 'build' 123
 * - 'type' type
 * - 'pre' 123.type
 *
 * @param string $tag
 * @return string[]
 */
function parse_version(string $tag)
{
    $tag = trim($tag);

    $version = array();
    $version['raw'] = $tag;

    if (preg_match('/^(.*) \(build ([0-9]+)\).*$/', $tag, $matches)) {
        $version['build'] = $matches[2];
        $tag = $matches[1];
    }
    $tag = trim($tag);
    $chunks = preg_split("/[-]/", $tag, 2);
    if ($chunks[0][0] == "v")
        $chunks[0] = substr($chunks[0], 1);

    $parts = preg_split('/\./', $chunks[0], 3);

    $version['major'] = convert_vnum($parts, 0);
    $version['minor'] = convert_vnum($parts, 1);
    $version['revision'] = convert_vnum($parts, 2);
    $version['type'] = "";
    $version['pre'] = "";

    if (count($chunks) > 1) {
        $version['pre'] = $chunks[1];
        $add = $chunks[1];
        // old versioning scheme 1.2.3 (build 234)
        if (preg_match('/.*\(build ([0-9]+)\).*/', $add, $matches)) {
            $version['build'] = $matches[1];
        } else if (preg_match('/([0-9]+).*/', $add, $matches)) {
            $version['build'] = $matches[1];
        }

        if (preg_match('/[0-9.-]*([a-zA-Z]+).*/', $add, $matches)) {
            $version['type'] = $matches[1];
        }
    } else {
        if (preg_match('/[0-9.]*([a-zA-Z]+).*/', $chunks[0], $matches)) {
            $version['type'] = $matches[1];
            $version['pre'] = $matches[1];
        }
    }
    return $version;
}

/**
 * Sets the 'version' property of $release.
 *
 * If the properties file 'version_file' is given, the version is taken from the 
 * SEMANTIC_VERSION property if present, otherwise the VERSION property.
 * If neither is present, the version is taken from the 'tag' property.
 *
 * @param array $release
 */
function get_version(array &$release)
{
    $version = parse_version($release['tag']);
    if (! empty($release['version_file'])) {
        $lines = file($release['version_file']);
        foreach ($lines as $line) {
            if (preg_match('/^SEMANTIC_VERSION=(.*)$/', $line, $matches)) {
                $v = parse_version($matches[1]);
                if (! empty($v))
                    $version = $v;
            } else if (preg_match('/^VERSION=(.*)$/', $line, $matches)) {
                $v = parse_version($matches[1]);
                if (! empty($v) && empty($version))
                    $version = $v;
            }
        }
    }
    $release['version'] = $version;
}

/**
 * Gets all magellan releases from the github api and stores them in an array.
 * 
 * @return string[][]
 */
function get_releases()
{
    $json = get_api_content("https://api.github.com/repos/magellan2/magellan2/releases");

    $releases = array();
    foreach ($json as $json_release) {
        if ($json_release['draft'])
            continue;

        $release = array();
        $release['tag'] = $json_release['tag_name'];
        $release['url'] = $json_release['html_url'];
        $release['name'] = $json_release['name'];
        $release['prerelease'] = $json_release['prerelease'];
        $release['created'] = $json_release['created_at'];
        $release['published'] = $json_release['published_at'];
        $release['description'] = $json_release['body'];
        $release['assets'] = array();
        foreach ($json_release['assets'] as $json_asset) {
            $asset = array();
            $asset['name'] = $json_asset['name'];
            $asset['date'] = $json_asset['updated_at'];
            $asset['url'] = $json_asset['browser_download_url'];
            $release['assets'][] = $asset;
        }

        $release['formatted_time'] = (new DateTime($release['published']))->format("d.m.Y H:i:s P");

        $release['jar'] = "";
        $release['mac'] = "";
        $release['zip'] = "";
        $release['changelog'] = "";
        foreach ($release['assets'] as $asset) {
            if (preg_match("/^magellan_v.*\.jar$/", $asset['name']))
                $release['jar'] = $asset['url'];
            if (preg_match("/^magellan_v.*_macos\.tgz$/", $asset['name']))
                $release['mac'] = $asset['url'];
            if (preg_match("/^magellan_v.*\.zip$/", $asset['name']))
                $release['zip'] = $asset['url'];
            if (preg_match("/^CHANGELOG.txt$/", $asset['name']))
                $release['changelog'] = $asset['url'];
            if (preg_match("/^VERSION$/", $asset['name']))
                $release['version_file'] = $asset['url'];
        }

        get_version($release);

        $releases[] = $release;
    }

    return $releases;
}

/**
 * Reads a properties file and stores it in an array.
 * 
 * @param string $filename
 * @return string[]
 */
function parse_properties(string $filename)
{
    $properties = array();
    $lines = file($filename);
    foreach ($lines as $lineNumber => $line) {
        $line = trim($line);
        if (! (substr($line, 0, 1) == "#")) {
            $parts = preg_split("/=/", $line, 2);
            if (sizeof($parts) == 2)
                $properties[$parts[0]] = $parts[1];
        }
    }
    return $properties;
}

function download_link($url, string $text, bool $external = false)
{
    $ext = $external ? " class=\"externalLink\"" : "";
    if (! empty($url))
        echo "<li><a href=\"{$url}\"$ext>{$text}</a></li>\n";
}

/** get the releases from github, sort them and store the latest stable and nightly release */

$releases = get_releases();
usort($releases, 'compare_release_version');

foreach ($releases as $release) {
    if (! $release['prerelease'] && ($release['version']['type'] == '' || $release['version']['type'] == 'stable')) {
        $RELEASE = $release;
    }
}
$LATEST = $RELEASE;
foreach ($releases as $release) {
    if (isset($RELEASE))
        if ($release['version']['type'] == 'latest' || $release['version']['type'] == 'alpha' || $release['version']['type'] == 'beta' || $release['version']['type'] == 'rc') {
            $LATEST = $release;
        }
}

?>