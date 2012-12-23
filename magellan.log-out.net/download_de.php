<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php
    $page = "download";
    $language = "de";
    include_once "head.php";
    ?>
    <title>
      Magellan Download
    </title>
  </head>
  <body>
    <div id="container">
      <?php 
        include_once "functions.php";
        include_once "navi_".$language.".php";
        include_once "header.php";
      ?>
      <div id="center">
        <h2>
          Download
        </h2>
        <p>
          Auf dieser Seite findest du alle Downloads zu Magellan. Bis auf
          Magellan 1.x sind alle JAR Dateien, die du herunterl�dst, ausf�hrbar.
          Startest du es, wird eine Installationsroutine ausgef�hrt, die dich
          durch die erste Konfiguration f�hrt. Magellan 2.x und seine Plugins
          verteilen sich �ber mehrere Dateien, die in einem beliebigen
          Verzeichnis installiert werden k�nnen.
        </p>
        <p><strong>Du brauchst <a href="http://java.sun.com/javase/downloads/" 
          class="externalLink">Java</a> um Magellan zu benutzen!</strong></p>
        <a name="magellan2"></a> 
        <h3>
          Download Magellan 2.x
        </h3>
        <p>
          Hier findest Du die aktuelle installierbare Version von Magellan2.x.
          Diese Version wird von den Entwicklern freigegeben und bezeichnet
          eine Version, die stabil ist. Im <a href=
          "./release/CHANGELOG.txt">CHANGELOG</a> findest du alle �nderungen,
          die seit der letzten Release gemacht wurden.</p>
          <p>
          <strong>Jetzt mit Unterst�tzung f�r <a href="http://wiki.eressea.de/de/Das_dritte_Zeitalter">E3</a>!</strong>
          </p>
          <p>
           Version: <?php echo $RELEASE_VERSION; ?><br />
           Stand: <?php echo $RELEASE; ?><br />
        </p>
        <ul>
          <li>
<!--            <a href="https://sourceforge.net/projects/magellan-client/files/Magellan/2.0.5/magellan_v2.0.5.jar/download">JAR installer</a> (15 MB) -->
            <a href="./release/magellan_v2.0.6.jar">JAR installer</a> (15 MB)
          </li>
          <li>
            <a href="./release/magellan_v2.0.6_macos.tgz">MacOS app</a> (15 MB)
          </li>
        </ul>
        <ul>
          <li>
<!--            <a href="https://sourceforge.net/projects/magellan-client/files/Magellan/2.0.5/magellan_v2.0.5.zip/download">ZIP</a> (14 MB) -->
            <a href="./release/magellan_v2.0.6.zip">ZIP</a> (14 MB)
          </li>
          <li>
            <a href="./release/magellan2-src.zip">Source</a> (19 MB) 
          </li>
        </ul>
        <br />
         
        <a name="NightlyBuild" id="NightlyBuild"></a><h3>
          Nightly Build
        </h3>
        <p>
          Hier findest Du die aktuellste Version von Magellan 2.x. Sie wird jede
          Nacht neu kompiliert und hier auf dem Server zur Verf�gung gestellt.
          Im <a href="./nightly-build/CHANGELOG.txt">CHANGELOG</a> findest du
          alle �nderungen, die seit der letzten Nacht gemacht wurden.</p>
          <p>Enth�lt Unterst�tzung f�r E3.</p>
          <p>
           Version: <?php echo $LATEST_VERSION; ?><br />
           Stand: <?php echo $NIGHTLY_BUILD; ?><br />
        </p>
        <ul>
          <li>
            <a href="./nightly-build/magellan_v2.0.6.jar">JAR installer</a>
            (15 MB)
          </li>
          <li>
            <a href="./nightly-build/magellan_v2.0.6_macos.tgz">MacOS app</a>
            (15 MB)
          </li>
        </ul>
        <ul>
          <li>
            <a href="./nightly-build/magellan_v2.0.6.zip">ZIP</a> (14 MB)
          </li>
          <li>
            <a href="./nightly-build/magellan2-src.zip">Source</a> (19 MB)
          </li>
        </ul>
        <br />
         <a name="magellan1"></a> 
        <h3>
          Download Magellan 1.x
        </h3>
        <p>
          Die Entwicklung des bisherigen Magellan Clients wurde eingestellt.
          Die letzte Version lautet 1.2.5h.
        </p>
        <p>
          Die aktuelle Version kann bei <a class="externalLink" href=
          "http://sourceforge.net/project/showfiles.php?group_id=174030/">SourceForge</a>
          heruntergeladen werden.
        </p>
        <br />
         <a name="plugins"></a> 
        <h3>
          Download Plugins
        </h3>
        <p>
          Hier findet ihr eine Reihe von Plugins, die wir euch hier direkt zum
          Download anbieten k�nnen, weil uns die Autoren darum gebeten haben.
        </p>
        <ul>
          <li>
            <b>MapCleaner Plugin</b><br />
             Repariert Reports<br />
             siehe <a href="plugins_mapcleaner_de.php">Beschreibung</a><br />
             Download f�r 2.0.5: <a href="plugins/mapcleaner-installer-for2.0.5.jar">Installer
            JAR</a><br />
             Download f�r nightly: <a href="plugins/mapcleaner-installer.jar">Installer
            JAR</a><br />
            <br />
          </li>
          <li>
            <b>MemoryWatch Plugin</b><br />
             Zeigt Magellan Speicherverbrauch an<br />
             siehe <a href="plugins_memorywatch_de.php">Beschreibung</a><br />
             Download f�r 2.0.5: <a href="plugins/memorywatch-installer-for2.0.5.jar">Installer
            JAR</a><br />
             Download f�r "nightly: <a href="plugins/memorywatch-installer.jar">Installer
            JAR</a><br />
            <br />
          </li>
          <li>
            <b>Statistics Plugin</b><br />
             Zeigten Grafiken und Tabellen f�r historische Reportdaten<br />
             see <a href="plugins_statistics_de.php">Description</a><br />
             Download f�r nightly build: <a href="plugins/statistics-installer.jar">Installer
             JAR</a><br />
            <br />
          </li>
          <li><a name="teacher"></a>
            <b>Teacher Plugin</b><br />
             Vereinfachte Lehrer-Sch�ler Operation<br />
             siehe <a href="plugins_teacher_de.php">Beschreibung</a><br />
             Download f�r 2.0.5: <a href="plugins/teacher-installer-for2.0.5.jar">Installer
             JAR</a> Version 0.10.4<br />
             Download f�r "nightly": <a href="plugins/teacher-installer.jar">Installer
             JAR</a> Version 0.14<br />
            <br />
          </li>
          <li><a name="shiploader"></a>
            <b>ShipLoader Plugin</b><br />
             Schiffe bequem beladen...<br />
             siehe <a href="plugins/README.shiploader.txt">Beschreibung</a><br />
             Download f�r 2.0.5: <a href="plugins/shiploader-installer-for2.0.5.jar">Installer
            JAR</a> Version 0.1.1<br />
             Download f�r "nightly": <a href="plugins/shiploader-installer.jar">Installer
            JAR</a> Version 0.1.2<br />
            <br />
          </li>
          
          <li><a name="mapicons"></a>
            <b>MapIcons Plugin</b><br />
             Wichtige Nachrichten einfach sehen<br />
             siehe <a href="plugins_mapicons_de.php">Beschreibung</a><br />
             Download (f�r Magellan 2.0.5): <a href="plugins/mapicons-installer.jar">Installer
            JAR</a> Version 0.96<br />
            Download (f�r Magellan - nightly): <a href="plugins/mapicons-installer_0_98.jar">Installer
            JAR</a> Version 0.98<br />
             
            <br />
          </li>
          
           <li><a name="lighthouseicons"></a>
            <b>LightHouseIcons Plugin</b><br />
             Aktuell �berwachte Regionen und Reichweite visualisieren<br />
             siehe <a href="plugins_lighthouseicons_de.php">Beschreibung</a><br />
             Download (alle Versionen): <a href="plugins/lighthouseicons-installer.jar">Installer
            JAR</a> Version 0.2<br />
             
            <br />
          </li>
          
           <li><a name="fow_update"></a>
            <b>FogOfWar-Update Plugin</b><br />
             �ndert die Ansicht des Nebel des Kriegs<br />
             siehe <a href="plugins_fow_update_de.php">Beschreibung</a><br />
             Download (alle Versionen): <a href="plugins/fow_update-installer.jar">Installer
            JAR</a> Version 0.2<br />
             
            <br />
          </li>
          
          
        </ul>
        
        <br />
         <a name="tools"></a> 
        <h3>
          Download Tools
        </h3>
        <p>
          Hier findet ihr eine Reihe von Tools, die wir euch hier direkt zum
          Download anbieten k�nnen.
        </p>
        <ul>
          <li>
            <b>Console Merger</b><br />
             F�gt 2 Reporte zusammen, ben�tigt dazu lediglich eine Magellan2 Installation, kein gestartetes Magellan2.<br />
             siehe <a href="tools_consolemerger_de.php">Beschreibung</a><br />
             Download (Stand Magellan 2.0.5): <a href="tools/consolemerger-for2.0.5.jar">ausf�hrbare JAR</a><br />
             Download (Stand Nightly): <a href="tools/consolemerger.jar">ausf�hrbare JAR</a><br />
            <br />
          </li>
        </ul>
      </div>
    </div>
  </body>
</html>

