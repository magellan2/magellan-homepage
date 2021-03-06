<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    $page = "plugins";
    $language = "en";
    include_once "head.php";
    ?>
    <title>Magellan Plugins</title>
</head>
<body>
    <div id="container">
      <?php
    include_once "navi_" . $language . ".php";
    include_once "header.php";
    ?>
      <div id="center">
            <h3>Plugins</h3>
            <p>Plugins are external modules or extensions, that can be added to the Magellan client
                to add features to Magellan that are currently not available.</p>
            <p>These are the plugins known to us:</p>
            <ul>
                <li><a href="plugins_alliance_en.php">Alliance Plugin</a></li>
                <li><a href="plugins_extcmds_en.php">Extended Commands Plugin</a></li>
                <li><a href="plugins_lighthouseicons_en.php">LightHouseIcons Plugin</a></li>
                <li><a href="plugins_mapcleaner_en.php">MapCleaner Plugin</a></li>
                <li><a href="plugins_mapedit_en.php">MapEdit Plugin</a></li>
                <li><a href="plugins_memorywatch_en.php">MemoryWatch Plugin</a></li>
                <li><a href="plugins_mapicons_en.php">MapIcons Plugin</a></li>
                <li><a href="plugins_shiploader_en.php">ShipLoader Plugin</a></li>
                <li><a href="plugins_statistics_en.php">Statistics Plugin</a></li>
                <li><a href="plugins_teacher_en.php">Teacher Plugin</a></li>
            </ul>
            <p>The installation of most plugins is very easy. Every plugin comes as an installable
                JAR file. When you start this file, the installer asks for the place where you
                installed Magellan and checks if you choose the right path. If everything seems
                okay, the installer puts all necessary files into the Magellan directory. After the
                next restart of Magellan, the plugin is initialized and integrated into the client.
            </p>
            <h2>Development of Plugins</h2>
            <p>
                Developing plugins is not very hard if you can program in Java. You have to provide
                at least one class extending the interface
                <code>magellan.client.extern.MagellanPlugIn</code>
                . You can find the API documentation in your local Magellan installation (under
                <code>doc/api</code>
                ) or in the source code available on GitHub.
            </p>
            <p>Here's a short HOWTO for creating the installer:</p>
            <p>If you are using Eclipse, we assume that your plugin is its own project and you have Magellan as a
                second project. Your directory structure could look like this:</p>
            <pre>
- src
   - ...Source files...
- doc
   - LICENSE.txt
   - CHANGELOG.txt
   - ....
- etc
   - ...message properties or whatever
- lib
   - ...optional libraries...
- build.installer.xml
- izpack-install.template.xml
- README.md
</pre>
            <p>
                You should start with
                <code>build.installer.xml</code>
                from another plugin and change a few things:
            </p>
            <ul>
                <li><code>plugin.displayname</code> - name of the plugin</li>
                <li><code>plugin.basename</code> - base name of directories and the installer</li>
                <li><code>plugin.author</code> - author's name</li>
                <li><code>plugin.author.email</code> - and email</li>
                <li><code>plugin.version</code> - current version (a build number is generated additionally)</li>
                <li><code>plugin.description</code> - short description of what the plugin does</li>
                <li><code>$magellan2</code> - magellan source directory, typically <code>${basedir}/../Magellan2</code>
                </li>
            </ul>
            <p>
                You usually do not need to touch the 
                <code>izpack-install.template.xml</code>.
            </p>
            <p>
                That's about it. You should execute the target "create-installer". After this is
                done, you will find the plugin with installer in the directory
                <code>release</code>.<br /> ATTENTION: The jar file created in the main directory is just the compiled
                source, not the installer, which is always in the
                <code>release</code>
                directory.
            </p>
        </div>
    </div>
</body>
</html>

