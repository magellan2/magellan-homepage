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
      Magellan Plugins - MapEdit Plugin
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
          MapEdit Plugin
        </h3>
        <table summary="" cellspacing="0" cellpadding="1" border="0" class=
        "plugin">
          <tr class="plugin">
            <td class="plugin">
              Name:
            </td>
            <td class="plugin">
              MapEdit Plugin
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Version:
            </td>
            <td class="plugin">
              1.0
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Description:
            </td>
            <td class="plugin">
              Creation of regions and other changes on the map.
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Author:
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
              Download:
            </td>
            <td class="plugin">
              In the Magellan client.
            </td>
          </tr>
        </table>
        
        <p>
          With this plugin the map of the report becomes editable. For each region the 
          region type and name are changeable. Of course you can create new regions and
          delete existing ones. Changing of herb-information is supported.
        </p>
        <p>
          I'm sorry that until now the plugin is available in German only.
        </p>
        <p>
          <img src="images/plugin_mapedit.png" alt="MapEdit" border="0" />
        </p>
      </div>
    </div>
  </body>
</html>

