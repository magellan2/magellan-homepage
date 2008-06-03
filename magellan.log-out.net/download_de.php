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
          Magellan 1.x sind alle JAR Dateien, die du herunterlädst, ausführbar.
          Startest du es, wird eine Installationsroutine ausgeführt, die dich
          durch die erste Konfiguration führt. Magellan 2.x und seine Plugins
          verteilen sich über mehrere Dateien, die in einem beliebigen
          Verzeichnis installiert werden können.
        </p>
        <a name="magellan2"></a> 
        <h3>
          Download Magellan 2.x
        </h3>
        <p>
          Hier findest Du die aktuelle installierbare Version von Magellan2.x.
          Diese Version wird von den Entwicklern freigegeben und bezeichnet
          eine Version, die stabil ist. Im <a href=
          "./release/CHANGELOG.txt">CHANGELOG</a> findest du alle Änderungen,
          die seit der letzten Release gemacht wurden.<br />
          <br />
           Version: <?php echo $RELEASE_VERSION; ?><br />
           Stand: <?php echo $RELEASE; ?><br />
        </p>
        <ul>
          <li>
            <a href="./release/magellan_v2.0.1.jar">JAR installer</a>
            (12.9MB)
          </li>
        </ul>
        <ul>
          <li>
            <a href="./release/magellan_v2.0.1.zip">ZIP</a> (12.3MB)
          </li>
          <li>
            <a href="./release/magellan2-src.zip">Source</a> (17.7MB)
          </li>
        </ul>
        <br />
         
        <h3>
          Nightly Build
        </h3>
        <p>
          Hier findest Du die aktuellste Version von Magellan 2.x. Sie wird jede
          Nacht neu kompiliert und hier auf dem Server zur Verfügung gestellt.
          Im <a href="./nightly-build/CHANGELOG.txt">CHANGELOG</a> findest du
          alle Änderungen, die seit der letzten Nacht gemacht wurden.<br />
          <br />
           Version: <?php echo $LATEST_VERSION; ?><br />
           Stand: <?php echo $NIGHTLY_BUILD; ?><br />
        </p>
        <ul>
          <li>
            <a href="./nightly-build/magellan_v2.0.2.jar">JAR installer</a>
            (14MB)
          </li>
        </ul>
        <ul>
          <li>
            <a href="./nightly-build/magellan_v2.0.2.zip">ZIP</a> (14MB)
          </li>
          <li>
            <a href="./nightly-build/magellan2-src.zip">Source</a> (19MB)
          </li>
        </ul>
        <br />
         <a name="magellan1"></a> 
        <h3>
          Download Magellan 1.x
        </h3>
        <p>
          Die Entwicklung des bisherigen Magellan Clients wurde eingestellt.
          Die letzte Version lautet 1.2.5g.
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
          Download anbieten können, weil uns die Autoren darum gebeten haben.
        </p>
        <ul>
          <li>
            <b>MapCleaner Plugin</b><br />
             Repariert Reports<br />
             siehe <a href="plugins_mapcleaner_de.php">Beschreibung</a><br />
             Download: <a href="plugins/mapcleaner-installer.jar">Installer
            JAR</a><br />
            <br />
          </li>
          <li>
            <b>MemoryWatch Plugin</b><br />
             Zeigt Magellan Speicherverbrauch an<br />
             siehe <a href="plugins_memorywatch_de.php">Beschreibung</a><br />
             Download: <a href="plugins/memorywatch-installer.jar">Installer
            JAR</a><br />
            <br />
          </li>
          <li>
            <b>Statistics Plugin</b><br />
             Zeigten Grafiken und Tabellen für historische Reportdaten<br />
             see <a href="plugins_statistics_de.php">Description</a><br />
             Download: <a href="plugins/statistics-installer.jar">Installer
            JAR</a><br />
            <br />
          </li>
          <li>
            <b>Teacher Plugin</b><br />
             Vereinfachte Lehrer-Schüler Operation<br />
             siehe <a href="plugins_teacher_de.php">Beschreibung</a><br />
             Download: <a href="plugins/teacher-installer.jar">Installer
            JAR</a><br />
            <br />
          </li>
        </ul>
      </div>
    </div>
  </body>
</html>

