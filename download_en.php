<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    $page = "download";
    $language = "en";
    include_once "head.php";
    ?>
    <title>Magellan Download</title>
</head>
<body>
    <div id="container">
      <?php
    include_once "functions.php";
    include_once "navi_" . $language . ".php";
    include_once "header.php";
    ?>
      <div id="center">
            <h2>Download</h2>
            <p>On this page you can find all available downloads for Magellan. Except for Magellan
                1.x, all JAR files are executable. If you start one of them, an installation program
                is executed, that helps you with the first configuration. Magellan 2.x, and the
                plugins are divided into multiple files that can be installed in any directory (for
                example also on a USB stick).</p>
            <p>
                <strong>You need Java to use Magellan!</strong> See the <a href="index_en.php">main
                    page</a> for information on Java.
            </p>
            <a name="magellan2"></a>
            <h3>Download Magellan 2.x</h3>
            <p>
                Here you can find the current stable release of Magellan2.x. 
                This version is recommended for all users and
                mostly stable. In the
                <?php
                if (empty($RELEASE['changelog']))
                    echo "CHANGELOG";
                else
                    echo "<a href=\"{$RELEASE['changelog']}\">CHANGELOG</a>";
                ?>
                you can find all the changes since the last release.
            </p>
            <?php
            if (empty($RELEASE))
                echo "<p><strong>Fehler:</strong> Release nicht gefunden bei 
                          <a href='https://github.com/magellan2/magellan2/releases' class='externalLink'>GitHub</a>!</p>";
            ?>
            <p>
           Version: <?php echo $RELEASE['version']['raw']; ?><br />
           Status: <?php echo $RELEASE['formatted_time']; ?><br />
            </p>
            <ul>
            <?php
            download_link($RELEASE['jar'], "JAR installer (Windows, Linux)");
            download_link($RELEASE['mac'], "MacOS app");
            download_link($RELEASE['zip'], "ZIP file");
            download_link($RELEASE['url'], "Source code at github (for developers)", true);
            ?>
            </ul>
            <br /> <a name="NightlyBuild" id="NightlyBuild"></a>
            <h3>Nightly Build</h3>
            <p>
                Here you can find the latest version of Magellan 2.x.
                This version is compiled whenever we make changes, and it may be
                unstable. So it is recommended for developers and beta
                testers only. In the 
                <?php
                if (empty($LATEST['changelog']))
                    echo "CHANGELOG";
                else
                    echo "<a href=\"{$LATEST['changelog']}\">CHANGELOG</a>";
                ?>
                you can find all changes made since the last build.
            </p>
            <p>
           Version: <?php echo $LATEST['version']['raw']; ?><br />
           Status: <?php echo $LATEST['formatted_time']; ?><br />
            </p>
            <ul>
            <?php
            download_link($LATEST['jar'], "JAR installer (Windows, Linux)");
            download_link($LATEST['mac'], "MacOS app");
            download_link($LATEST['zip'], "ZIP file");
            download_link("https://github.com/magellan2/magellan2/releases", "All Releases at github (for developers)", true);
            ?>
            </ul>
            <br /> <a name="magellan1"></a>
            <h3>Download Magellan 1.x</h3>
            <p>The development of the old Magellan client has stopped because of the huge amount of
                changes in the new release. It's not possible to transfer every necessary patch to
                this version. The latest version is 1.2.5h.</p>
            <p>
                You can download the latest version at <a class="externalLink"
                    href="https://sourceforge.net/project/showfiles.php?group_id=174030/">SourceForge</a>.
            </p>
            <br /> <a name="plugins"></a>
            <h3>Download Plugins</h3>
            <p>Here you can find some plugins that are available directly from this server.</p>
            <ul>
                <li><b>MapCleaner Plugin</b><br /> Repairs Reports<br /> see <a
                    href="plugins_mapcleaner_en.php">Description</a><br /> Download for 2.0.5: <a
                    href="plugins/mapcleaner-installer-for2.0.5.jar">Installer JAR</a><br />
                    Download for nightly: <a href="plugins/mapcleaner-installer.jar">Installer JAR</a><br />
                    <br /></li>
                <li><b>MemoryWatch Plugin</b><br /> Shows Magellan memory usage<br /> see <a
                    href="plugins_memorywatch_en.php">Description</a><br /> Download for 2.0.5: <a
                    href="plugins/memorywatch-installer-for2.0.5.jar">Installer JAR</a><br />
                    Download for "nightly: <a href="plugins/memorywatch-installer.jar">Installer JAR</a><br />
                    <br /></li>
                <li><b>Statistics Plugin</b><br /> Shows graphs and tables for historic data of a
                    report<br /> see <a href="plugins_statistics_en.php">Description</a><br />
                    Download: <a href="plugins/statistics-installer.jar">Installer JAR</a><br /> <br /></li>
                <li><a name="teacher"></a> <b>Teacher Plugin</b><br /> Simplifies teacher learner
                    relations.<br /> see <a href="plugins_teacher_en.php">Description</a><br />
                    Download for 2.0.5: <a href="plugins/teacher-installer-for2.0.5.jar">Installer
                        JAR</a> Version 0.10.4<br /> Download for "nightly": <a
                    href="plugins/teacher-installer.jar">Installer JAR</a> Version 0.14<br /> <br /></li>
                <li><a name="shiploader"></a> <b>ShipLoader Plugin</b><br /> Load your ships with
                    ease...<br /> see <a href="plugins/README.shiploader.txt">Description</a><br />
                    Download for 2.0.5: <a href="plugins/shiploader-installer-for2.0.5.jar">Installer
                        JAR</a> Version 0.1.1<br /> Download for "nightly": <a
                    href="plugins/shiploader-installer.jar">Installer JAR</a> Version 0.1.2<br /> <br /></li>
                <li><a name="mapicons"></a> <b>MapIcons Plugin</b><br /> Important messages seen on
                    the map<br /> see <a href="plugins_mapicons_en.php">Description</a><br />
                    Download (Magellan 2.0.5): <a href="plugins/mapicons-installer_2_0_5.jar">Installer
                        JAR</a> Version 0.96<br /> Download (Magellan - nightly): <a
                    href="plugins/mapicons-installer.jar">Installer JAR</a> Version 1.41<br /> <br /></li>

                <li><a name="lighthouseicons"></a> <b>LightHouseIcons Plugin</b><br /> Current by
                    lighthouse controlled regions and the maximum range of all lighthouse are
                    visible<br /> see <a href="plugins_lighthouseicons_en.php">Description</a><br />
                    Download (all versions): <a href="plugins/lighthouseicons-installer.jar">Installer
                        JAR</a> Version 0.2<br /> <br /></li>
                <li><a name="fow_update"></a> <b>FogOfWar-Update Plugin</b><br /> Changes lifting of
                    the Fog of War<br /> see <a href="plugins_fow_update_de.php">Description</a><br />
                    Download (all versions): <a href="plugins/fow_update-installer.jar">Installer
                        JAR</a> Version 0.2<br /> <br /></li>

            </ul>

            <br /> <a name="tools"></a>
            <h3>Download Tools</h3>
            <p>Next is our tools-section. For now, these tools are available for download:</p>
            <ul>
                <li><b>Console Merger</b><br /> Merges two reports. needs an Magellan2 installation,
                    but no running Magellan2 application.<br /> see <a
                    href="tools_consolemerger_en.php">Description</a><br /> Download (for Magellan
                    2.0.5): <a href="tools/consolemerger-for2.0.5.jar">executable JAR</a><br />
                    Download (for Magellan "nightly): <a href="tools/consolemerger.jar">executable
                        JAR</a><br /> <br /></li>
            </ul>
        </div>
    </div>
</body>
</html>

