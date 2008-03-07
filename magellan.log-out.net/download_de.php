<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="SHORTCUT ICON" href="/magellan2/favicon.ico" />
    <link rel="alternate stylesheet" href="http://eressea.sourceforge.net/magellan/classic.css" type="text/css" title="Classic" />
    <link rel="stylesheet" href="http://eressea.sourceforge.net/magellan/default.css" type="text/css" title="Default" />
    <link rel="stylesheet" href="theme.css" type="text/css" title="Theme" />
    <title>Magellan Download</title>
  </head>
  <body>
    <div id="container">
<?php $page = "download"; ?>
<?php include_once "functions.php"; ?>
<?php include_once "navi_de.php"; ?>
<?php include_once "header.php"; ?>
      <div id="center">
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

