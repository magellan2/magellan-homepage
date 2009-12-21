<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php
      $page = "plugins";
      $language = "en";
      include_once "head.php";
    ?>
    <title>
      Magellan Plugins - MapCleaner Plugin
    </title>
  </head>
  <body>
    <div id="container">
      <?php
        include_once "navi_".$language.".php";
        include_once "header.php"; 
      ?>
      <div id="center">
        <h3>
          MapCleaner Plugin
        </h3>
        <table summary="" cellspacing="0" cellpadding="1" border="0" class=
        "plugin">
          <tr class="plugin">
            <td class="plugin">
              Name:
            </td>
            <td class="plugin">
              MapCleaner Plugin
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Version:
            </td>
            <td class="plugin">
              1.1
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Kurzbeschreibung:
            </td>
            <td class="plugin">
              Repairs Reports
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Autor:
            </td>
            <td class="plugin">
              Fiete
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Website:
            </td>
            <td class="plugin">
              -
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Download
            </td>
            <td class="plugin">
              <a href="download_de.php#plugins">http://magellan.log-out.net</a>
            </td>
          </tr>
        </table>
        <p>
          The MapCleaner cleans up the data of the map of an loaded report.<br>
          Version 1.1:<br><ul>
          <li>No more islands with Firewall (Feuerwand) regions.</li>
          <li>Empty Islands are deleted</li> 
          </ul>
          Version 1.0:<br>
          <ul>
          <li>Names from ocean-regions are deleted.</li>
          </ul>
        </p>
      </div>
    </div>
  </body>
</html>

