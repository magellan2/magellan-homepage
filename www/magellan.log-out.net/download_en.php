<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php
    $page = "download";
    $language = "en";
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
          On this page you can find all available downloads for Magellan.
          Except for Magellan 1.x all these files are executable JAR files.
          If you start one of them, an installation program is executed,
          that helps you with the first configuration. Magellan 2.x and
          the plugins are divided into multiple files that can be installed
          in any directory (for example also on a USB stick).
        </p>
        <a name="magellan2"></a> 
        <h3>
          Download Magellan 2.x
        </h3>
        <p>
          Here you can find the current stable release of Magellan 2.x.
          This version is recommended for all users and mostly stable.
          In <a href=
          "./release/CHANGELOG.txt">CHANGELOG</a> you can find all the changes
          since the last release.<br />
          <br />
           Version: <?php echo $RELEASE_VERSION; ?><br />
           Status: <?php echo $RELEASE; ?><br />
        </p>
        <ul>
          <li>
            <a href="./release/magellan_v2.0.3.jar">JAR installer</a>
            (12.9MB)
          </li>
        </ul>
        <ul>
          <li>
            <a href="./release/magellan_v2.0.3.zip">ZIP</a> (12.3MB)
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
          Here you can find the latest version of Magellan 2.x. This version
          is compiled every night and may be unstable. So it is recommended
          for developers and beta testers only.
          In <a href="./nightly-build/CHANGELOG.txt">CHANGELOG</a> you can
          find all changes made since the last night.<br />
          <br />
           Version: <?php echo $LATEST_VERSION; ?><br />
           Status: <?php echo $NIGHTLY_BUILD; ?><br />
        </p>
        <ul>
          <li>
            <a href="./nightly-build/magellan_v2.0.3.jar">JAR installer</a>
            (14MB)
          </li>
        </ul>
        <ul>
          <li>
            <a href="./nightly-build/magellan_v2.0.3.zip">ZIP</a> (14MB)
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
          The developing of the old Magellan client has stopped because of the
          huge amount of changes in the new release. It's not possible
          to transfer every necessary patch to this version. The latest
          version is 1.2.5h.
        </p>
        <p>
          You can download the latest version at <a class="externalLink" href=
          "http://sourceforge.net/project/showfiles.php?group_id=174030/">SourceForge</a>.
        </p>
        <br />
         <a name="plugins"></a> 
        <h3>
          Download Plugins
        </h3>
        <p>
          Here you can find some plugins that are available directly from
          this server.
        </p>
        <ul>
          <li>
            <b>MapCleaner Plugin</b><br />
             Repairs Reports<br />
             see <a href="plugins_mapcleaner_en.php">Description</a><br />
             Download: <a href="plugins/mapcleaner-installer.jar">Installer
            JAR</a><br />
            <br />
          </li>
          <li>
            <b>MemoryWatch Plugin</b><br />
             Shows Magellan memory usage<br />
             see <a href="plugins_memorywatch_en.php">Description</a><br />
             Download: <a href="plugins/memorywatch-installer.jar">Installer
            JAR</a><br />
            <br />
          </li>
          <li>
            <b>Statistics Plugin</b><br />
             Shows graphs and tables for historic data of a report<br />
             see <a href="plugins_statistics_en.php">Description</a><br />
             Download: <a href="plugins/statistics-installer.jar">Installer
            JAR</a><br />
            <br />
          </li>
          <li><a name="teacher" /></a>
            <b>Teacher Plugin</b><br />
             Simplifies teacher learner relations<br />
             see <a href="plugins_teacher_en.php">Description</a><br />
             Download: <a href="plugins/teacher-installer.jar">Installer
            JAR</a><br />
            <br />
          </li>
        </ul>
      </div>
    </div>
  </body>
</html>

