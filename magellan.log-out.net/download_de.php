<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="SHORTCUT ICON" href="/favicon.ico" />
    <link rel="alternate stylesheet" href="http://eressea.sourceforge.net/magellan/classic.css" type="text/css" />
    <link rel="stylesheet" href="http://eressea.sourceforge.net/magellan/default.css" type="text/css" />
    <link rel="stylesheet" href="theme.css" type="text/css" />
    <title>Magellan Download</title>
  </head>
  <body>
    <div id="container">
<?php 
  $page = "download";
  $language = "de";
  include_once "functions.php";
  include_once "navi_de.php";
  include_once "header.php";
?>
      <div id="center">
        <a name="magellan2"></a>
        <h3>
          Download Magellan 2.x
        </h3>
        <p>
          Hier findest Du die aktuelle installierbare Version von Magellan2. 
          <a href="./release/CHANGELOG.txt">CHANGELOG</a>.<br />
          <br />
          Version: <?php echo $RELEASE_VERSION; ?><br />
          Stand: <?php echo $RELEASE; ?><br />
        </p>
        <ul>
          <li>
            <a href="./release/magellan_v2.0.rc1.jar">JAR installer</a> (11.5MB)
          </li>
        </ul>
        <ul>
          <li>
            <a href="./release/magellan_v2.0.rc1.zip">ZIP</a> (10.4MB)
          </li>
          <li>
            <a href="./release/magellan2-src.zip">Source</a> (16.4MB)
          </li>
        </ul>
        <br />
         
        <h3>
          Nightly Build
        </h3>
        <p>
          Hier findest Du die aktuellste Version von Magellan2. Sie wird jede
          Nacht neu kompiliert und hier auf dem Server zur Verfügung gestellt.
          <a href="./nightly-build/CHANGELOG.txt">CHANGELOG</a>.<br />
          <br />
          Version: <?php echo $LATEST_VERSION; ?><br />
          Stand: <?php echo $NIGHTLY_BUILD; ?><br />
        </p>
        <ul>
          <li>
            <a href="./nightly-build/magellan_v2.0.rc1.jar">JAR installer</a> (11.5MB)
          </li>
        </ul>
        <ul>
          <li>
            <a href="./nightly-build/magellan_v2.0.rc1.zip">ZIP</a> (10.4MB)
          </li>
          <li>
            <a href="./nightly-build/magellan2-src.zip">Source</a> (16.4MB)
          </li>
        </ul>
        <br />
         
        <a name="magellan1"></a>
        <h3>
          Download Magellan 1.x
        </h3>
        <p>
          Die Entwicklung des bisherigen Magellan Clients wurde eingestellt.
          Die letzte Version lautet 1.2.5e.
        </p>
        <p>
          Die aktuelle Version kann bei 
          <a class="externalLink" href="http://sourceforge.net/project/showfiles.php?group_id=174030/">SourceForge</a> 
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
            <b>MapCleaner Plugin</b><br/>
            Repariert Reports<br/>
            siehe <a href="plugins_mapcleaner_de.php">Beschreibung</a><br/>
            Download: <a href="plugins/mapcleaner_installer.jar">Installer JAR</a><br/>
            <br/>
          </li>
          <li>
            <b>MemoryWatch Plugin</b><br/>
            Zeigt Magellan Speicherverbrauch an<br/>
            siehe <a href="plugins_mapcleaner_de.php">Beschreibung</a><br/>
            Download: <a href="plugins/memorywatch_installer.jar">Installer JAR</a><br/>
            <br/>
          </li>
          <li>
            <b>Teacher Plugin</b><br/>
            Vereinfachte Lehrer-Schüler Operation<br/>
            siehe <a href="plugins_mapcleaner_de.php">Beschreibung</a><br/>
            Download: <a href="plugins/teacher_installer.jar">Installer JAR</a><br/>
            <br/>
          </li>
        </ul>
      </div>
    </div>
  </body>
</html>

