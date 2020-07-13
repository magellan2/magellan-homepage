<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php
      $page = "plugins";
      $language = "de";
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
              Kurzbeschreibung:
            </td>
            <td class="plugin">
              Regionen anlegen und bearbeiten
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
              <a href="mapedit/">http://magellan.narabi.de/mapedit</a>
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Download:
            </td>
            <td class="plugin">
              Bestandteil des Magellan Clients.
            </td>
          </tr>
        </table>
        <p>
          Mit Hilfe dieses Plugins lässt sich die Karte eines geladenen Reports
          bearbeiten. Man kann für jede einzelne Region den Regionstyp
          festlegen, ihm fest einen Namen geben, die Region komplett löschen
          oder eine neue Region erstellen. Damit lässt sich die Karte nach
          belieben gestalten und modifizieren.
        </p>
        <p>
          <img src="images/plugin_mapedit.png" alt="MapEdit" border="0" />
        </p>
      </div>
    </div>
  </body>
</html>

