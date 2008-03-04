<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="SHORTCUT ICON" href="/magellan2/favicon.ico" />
    <link rel="alternate stylesheet" href="http://eressea.sourceforge.net/magellan/classic.css" type="text/css" title="Classic" />
    <link rel="stylesheet" href="http://eressea.sourceforge.net/magellan/default.css" type="text/css" title="Default" />
    <title>Magellan</title>
  </head>
<?php
if(file_exists("nightly-build/VERSION")) {
  $stat = @stat("nightly-build/VERSION");
  $NIGHTLY_BUILD = date("d.m.Y H:i:s P",$stat["mtime"]);
} else {
  $NIGHTLY_BUILD = "-?-";
}

if (file_exists("nightly-build/VERSION")) {
  $lines = file("nightly-build/VERSION");
  foreach ($lines as $lineNumber => $line) {
    $line = trim($line);
    if (!(substr($line,0,1) == "#")) {
      $LATEST_VERSION = substr($line,8);
    } 
  }
} else {
  $LATEST_VERSION = "-?-";
}

if(file_exists("release/VERSION")) {
  $stat = @stat("release/VERSION");
  $RELEASE = date("d.m.Y H:i:s P",$stat["mtime"]);
} else {
  $RELEASE = "-?-";
}

if (file_exists("release/VERSION")) {
  $lines = file("release/VERSION");
  foreach ($lines as $lineNumber => $line) {
    $line = trim($line);
    if (!(substr($line,0,1) == "#")) {
      $RELEASE_VERSION = substr($line,8);
    } 
  }
} else {
  $RELEASE_VERSION = "-?-";
}

?>
  <body>
    <div id="container">
      <div id="left">
        <p>
          <a href="http://magellan-client.sourceforge.net/"><img src="http://magellan-client.sourceforge.net/images/logo.jpg" width="134" alt="Magellan-Logo" border="0" /></a>
        </p>
        <p>
          <a href="http://magellan-client.sourceforge.net/">Magellan Home</a>
        </p>
        <p>
          <a href="http://magellan-client.sourceforge.net/de/download.shtml">Download Magellan1</a>
        </p>
        <p>
          <a href="#download">Download Magellan2</a>
        </p>
        <p>
          <a href="http://magellan-client.sourceforge.net/de/feedback.shtml">Feedback &amp; Support</a>
        </p>
        <p>
          <a href="http://magellan-client.sourceforge.net/de/faq.shtml">F.A.Q.</a>
        </p>
        <p>
          <a href="http://magellan-client.sourceforge.net/de/help.shtml">Dokumentation</a>
        </p>
        <p>
          <a href="./javadoc/">JavaDoc</a>
        </p>
        <p>
          <a href="http://magellan-client.sourceforge.net/mantis/">Bug melden (Mantis)</a>
        </p>
        <p>
          <a class="external" href="http://sourceforge.net/projects/magellan-client">Entwicklung</a>
        </p>
      </div>
      <div id="head">
        <a href="http://magellan-client.sourceforge.net/" target="_top">
          <img src="http://magellan-client.sourceforge.net/images/header.gif" alt="Magellan - Eressea Java-Client" border="0" />
        </a>
      </div>
      <div id="center">
        <h3>
          Was ist Magellan2?
        </h3>
        <p>
          Magellan2 ist eine konsequente Weiterentwicklung des Magellan
          Clients. Die Änderungen an diesem Client sind so umfassend, dass wir
          uns entschlossen haben, eine neue Versionsnummer zu vergeben.
        </p>
        <p>
          Magellan2 benötigt, im Gegensatz zu Magellan1 nun Java5 (1.5.0 oder
          höher). Außerdem wird es nun nicht mehr ein einzelnes JAR geben, dass
          alles enthält, sondern eine ZIP Datei, die man auf seinem Rechner
          auspacken muss. Das bietet Euch recht einfach die Möglichkeit, Texte
          oder Icons an Eure Bedürfnisse anzupassen.
        </p>
        <p>
          <a href="magellan2.png"><img src="magellan2-preview.png" border="0" /></a>
        </p>
        <p>
          Außerdem bietet Magellan2 noch einige Besonderheiten. Mit Hilfe des
          Infonode Docking Frameworks ist es nun möglich, die Oberfläche von
          Magellan seinen eigenen Bedürfnissen via Mausklick entsprechend zu
          gestalten, ohne auf Konfigurationsdateien zurückgreifen zu müssen.
          Darüberhinaus verfügt Magellan2 nun über eine getrennte
          Code-Struktur, um Server- oder Konsolen-basierte Anwendungen zu
          ermöglichen, ohne eine GUI Oberfläche haben zu müssen.
        </p>
        <h3>
          Download
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
            <a href="./release/magellan_v2.0.rc1.tar.gz">Tar GZ</a> (10.3MB)
          </li>
          <li>
            <a href="./release/magellan_v2.0.rc1.tar.bz2">Tar BZip2</a> (10.1MB)
          </li>
        </ul>
        <ul>
          <li>
            <a href="./release/magellan2-src.zip">Source</a> (16.4MB)
          </li>
        </ul>
        <br />
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
            <a href="./nightly-build/magellan_v2.0.rc1.tar.gz">Tar GZ</a> (10.3MB)
          </li>
          <li>
            <a href="./nightly-build/magellan_v2.0.rc1.tar.bz2">Tar BZip2</a> (10.1MB)
          </li>
        </ul>
        <ul>
          <li>
            <a href="./nightly-build/magellan2-src.zip">Source</a> (16.4MB)
          </li>
        </ul>
        <br />
        <br />
         
        <p>
          Bugs können im Mantis von Magellan eingetragen werden. Der Link
          lautet: <a class="external" href=
          "http://magellan-client.sourceforge.net/mantis/">http://magellan-client.sourceforge.net/mantis/</a>.
        </p>
      </div>
    </div>
  </body>
</html>

