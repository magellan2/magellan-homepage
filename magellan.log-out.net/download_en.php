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
  $language = "en";
  include_once "functions.php";
  include_once "navi_en.php";
  include_once "header.php"; 
?>
      <div id="center">
        <h3>
          Download
        </h3>
        <p>
          Here you find the current installable release version of Magellan 2.x.
          <a href="./release/CHANGELOG.txt">CHANGELOG</a>.<br />
          <br />
          Version: <?php echo $RELEASE_VERSION; ?><br />
          Status: <?php echo $RELEASE; ?><br />
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
          Here you can find the latest version of Magellan 2.x. This version
          will be compiled every night and is placed here on the server for 
          your disposal.
          <a href="./nightly-build/CHANGELOG.txt">CHANGELOG</a>.<br />
          <br />
          Version: <?php echo $LATEST_VERSION; ?><br />
          Status: <?php echo $NIGHTLY_BUILD; ?><br />
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

