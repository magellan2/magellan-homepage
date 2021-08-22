<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    $page = "download";
    $language = "de";
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
            <p>Auf dieser Seite findest du alle Downloads zu Magellan. Bis auf Magellan 1.x sind
                alle JAR Dateien, die du herunterlädst, ausführbar. Startest du es, wird eine
                Installationsroutine ausgeführt, die dich durch die erste Konfiguration führt.
                Magellan 2.x und seine Plugins verteilen sich über mehrere Dateien, die in einem
                beliebigen Verzeichnis installiert werden können.</p>

            <h2>Installation</h2>
            <p>
                Ab Version 2.1.0 (Build 752) kannst du nach dem Download einfach die Datei
                <code>magellan_installer...</code>
                ausführen.
            </p>
            <p>
                Damit werden alle nötigen Dateien installiert und nach Wunsch ein Link auf dem
                Desktop oder im Startmenü erstellt. Um Magellan auszuführen, nutze diesen Link oder
                führe die Datei magellan_launcher aus. Die Datei
                <code>magellan_launcher.vmoptions</code>
                kannst du verändern, um zum Beispiel Magellan mehr Speicher zu geben. Dies ist aber
                nur in speziellen Szenarien notwendig.
            </p>
            <p>
                Bis einschließlich Version 2.0.9 musst du erst <a href="index_de.php#java">Java</a>
                installieren, dann die Installationsdatei magellan_vX.Y.Z.jar durch Doppelklick oder
                das Ausführen des Kommandos
                <code>java -jar magellan_vX.Y.Z.jar</code>
                aufrufen.
            </p>
            <p>Das installierte Magellan startet man über die angelegten Links oder über die Dateien
                magellan.bat (Windows) bzw. magellan.sh (Linux) und ändert bei Bedarf diese Datei
                direkt.</p>
            <p>
                Mehr Informationen zu Java gibt es auf der <a href="index_de.php#java">Hauptseite</a>.
            </p>
            <p>
                <!-- Link required in exchange for open source license for install4j! -->
                Unser Der Installationsprogramm wurde mit Hilfe des
                Multiplattform-Installationsgenerators <a
                    href=https://www.ej-technologies.com/products/install4j/overview.html>install4j</a>
                generiert.
            </p>
            <a name="magellan2"></a>
            <h3>Download Magellan 2.x</h3>
            <p>
                Hier findest Du die aktuelle installierbare Version von
                Magellan2.x. Diese Version wird von den Entwicklern
                freigegeben und bezeichnet eine Version, die stabil ist. Im 
                <?php
                if (empty($RELEASE['changelog']))
                    echo "CHANGELOG";
                else
                    echo "<a href=\"{$RELEASE['changelog']}\">CHANGELOG</a>";
                ?>
                findest du alle Änderungen, die seit dem letzten Release
                gemacht wurden.
            </p>
            <?php
            if (empty($RELEASE))
                echo "<p><strong>Fehler:</strong> Release nicht gefunden bei 
                          <a href='https://github.com/magellan2/magellan2/releases' class='externalLink'>GitHub</a>!</p>";
            ?>
            <p>
           Version: <?php echo $RELEASE['version']['raw']; ?><br />
           Stand: <?php echo $RELEASE['formatted_time']; ?><br />
            </p>
            <ul>
            <?php
            download_link($RELEASE['jar'], "Installationsprogramm (Windows, Linux)");
            download_link($RELEASE['windows-x64'], "Windows");
            download_link($RELEASE['unix'], "Linux");
            download_link($RELEASE['macos'], "MacOS");
            download_link($RELEASE['zip'], "ZIP-Datei");
            download_link($RELEASE['url'], "Quellcode bei github (für Entwickler)", true);
            ?>
            </ul>
            <br /> <a name="NightlyBuild" id="NightlyBuild"></a>
            <h3>Nightly Build</h3>
            <p>
                Hier findest Du die aktuellste Version von Magellan 2.x.
                Sie wird bei jeder Änderung neu kompiliert und hier auf
                dem Server zur Verfügung gestellt. Im
                <?php
                if (empty($LATEST['changelog']))
                    echo "CHANGELOG";
                else
                    echo "<a href=\"{$LATEST['changelog']}\">CHANGELOG</a>";
                ?> 
                findest du alle Änderungen, die seit der letzten Nacht
                gemacht wurden.
            </p>
            <p>
           Version: <?php echo $LATEST['version']['raw']; ?><br />
           Stand: <?php echo $LATEST['formatted_time']; ?><br />
            </p>
            <ul>
            <?php
            download_link($LATEST['jar'], "Installationsprogramm (Windows, Linux)");
            download_link($LATEST['windows-x64'], "Windows");
            download_link($LATEST['unix'], "Linux");
            download_link($LATEST['macos'], "MacOS");
            download_link($LATEST['zip'], "ZIP-Datei");
            download_link("https://github.com/magellan2/magellan2/releases", "Alle Releases bei github (für Entwickler)", true);
            ?>
            </ul>
            <br /> <a name="magellan1"></a>
            <h3>Download Magellan 1.x</h3>
            <p>Die Entwicklung des bisherigen Magellan Clients wurde eingestellt. Die letzte Version
                lautet 1.2.5h.</p>
            <p>
                Die aktuelle Version kann bei <a class="externalLink"
                    href="https://sourceforge.net/project/showfiles.php?group_id=174030/">SourceForge</a>
                heruntergeladen werden.
            </p>
            <br /> <a name="plugins"></a>
            <h3>Download Plugins</h3>
            <p>
                Hier findet ihr eine Reihe von Plugins, die wir euch hier direkt zum Download
                anbieten können, weil uns die Autoren darum gebeten haben. Weitere Versionen findet
                ihr möglicherweise <a
                    href="https://github.com/magellan2/magellan2-extensions-plugins/releases">auf
                    GitHub</a>
            </p>
            <ul>
                <li><b>MapCleaner Plugin</b><br /> Repariert Reports<br /> siehe <a
                    href="plugins_mapcleaner_de.php">Beschreibung</a><br /> Download für 2.0.5: <a
                    href="plugins/mapcleaner-installer-for2.0.5.jar">Installer JAR</a><br />
                    Download für nightly: <?php latest_plugin_release_link('mapcleaner', 'Installer JAR', true); ?><br />
                    <br /></li>
                <li><b>MemoryWatch Plugin</b><br /> Zeigt Magellan Speicherverbrauch an<br /> siehe
                    <a href="plugins_memorywatch_de.php">Beschreibung</a><br /> Download für 2.0.5:
                    <a href="plugins/memorywatch-installer-for2.0.5.jar">Installer JAR</a><br />
                    Download für nightly: <?php latest_plugin_release_link('memorywatch', 'Installer JAR', true); ?><br />
                    <br /></li>
                <li><b>Statistics Plugin</b><br /> Zeigten Grafiken und Tabellen für historische
                    Reportdaten<br /> see <a href="plugins_statistics_de.php">Description</a><br />
                    Download für nightly: <?php latest_plugin_release_link('statistics', 'Installer JAR', true); ?><br />
                    <br /></li>
                <li><a name="teacher"></a> <b>Teacher Plugin</b><br /> Vereinfachte Lehrer-Schüler
                    Operation<br /> siehe <a href="plugins_teacher_de.php">Beschreibung</a><br />
                    Download für 2.0.5: <a href="plugins/teacher-installer-for2.0.5.jar">Installer
                        JAR</a> Version 0.10.5<br /> Download für nightly: <?php latest_plugin_release_link('teacher', 'Installer JAR', true); ?><br />
                    <br /></li>
                <li><a name="shiploader"></a> <b>ShipLoader Plugin</b><br /> Schiffe bequem
                    beladen...<br /> siehe <a href="plugins/README.shiploader.txt">Beschreibung</a><br />
                    Download für 2.0.5: <a href="plugins/shiploader-installer-for2.0.5.jar">Installer
                        JAR</a> Version 0.1.1<br /> Download für nightly: <?php latest_plugin_release_link('shiploader', 'Installer JAR', true); ?><br />
                    <br /></li>

                <li><a name="mapicons"></a> <b>MapIcons Plugin</b><br /> Wichtige Nachrichten
                    einfach sehen<br /> siehe <a href="plugins_mapicons_de.php">Beschreibung</a><br />
                    Download (für Magellan 2.0.5): <a href="plugins/mapicons-installer_2_0_5.jar">Installer
                        JAR</a> Version 0.96<br /> Download für nightly: <?php latest_plugin_release_link('mapicons', 'Installer JAR', true); ?><br />
                    <br /></li>

                <li><a name="lighthouseicons"></a> <b>LightHouseIcons Plugin</b><br /> Aktuell
                    überwachte Regionen und Reichweite visualisieren<br /> siehe <a
                    href="plugins_lighthouseicons_de.php">Beschreibung</a><br /> Download für nightly: <?php latest_plugin_release_link('lighthouseicons', 'Installer JAR', true); ?><br />
                    <br /> <br /></li>
            </ul>

            <a name="tools"></a>
            <h3>Download Tools</h3>
            <p>Hier findet ihr eine Reihe von Tools, die wir euch hier direkt zum Download anbieten
                können.</p>
            <ul>
                <li><b>Console Merger</b><br /> Fügt 2 Reporte zusammen, benötigt dazu lediglich
                    eine Magellan2 Installation, kein gestartetes Magellan2.<br /> siehe <a
                    href="tools_consolemerger_de.php">Beschreibung</a><br /> Download (Stand
                    Magellan 2.0.5): <a href="tools/consolemerger-for2.0.5.jar">ausführbare JAR</a><br />
                    Download (Stand Nightly): <a href="tools/consolemerger.jar">ausführbare JAR</a><br />
                    <br /></li>
            </ul>
        </div>
    </div>
</body>
</html>
