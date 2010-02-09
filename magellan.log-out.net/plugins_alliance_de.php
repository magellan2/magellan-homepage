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
      Magellan Plugins - Alliance Plugin
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
          Alliance Plugin
        </h3>
        <table summary="" cellspacing="0" cellpadding="1" border="0" class=
        "plugin">
          <tr class="plugin">
            <td class="plugin">
              Name:
            </td>
            <td class="plugin">
              Alliance Plugin
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Version:
            </td>
            <td class="plugin">
              0.1.alpha
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Kurzbeschreibung:
            </td>
            <td class="plugin">
              Serverbasierte Verwaltung von Reports und Befehlen
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Autor:
            </td>
            <td class="plugin">
              Thoralf Rickert
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Website:
            </td>
            <td class="plugin">
              <a href="http://odyssey.log-out.net/" class=
              "externalLink">http://odyssey.log-out.net/</a>
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Download:
            </td>
            <td class="plugin">
              <a href="http://odyssey.log-out.net/download.php" class=
              "externalLink">http://odyssey.log-out.net/download.php</a>
            </td>
          </tr>
        </table>
         
        <p>
          Dieses Plugin ermöglicht es, das mehrere Parteien einen einzelnen
          Report verwenden, um ihre Befehle Partei-übergreifend zu verwalten.
          Auf diese Weise kann z.B. eine Person alle Einheiten der Allianz auf
          einer Insel oder in einer Region bedienen. Alle anderen Parteien
          verbinden dann diese Befehle mit den eigenen in anderen Regionen und
          schicken Sie getrennt zum Eressea Server.
        </p>
        <p>
          Achtung: Dieses Plugin liegt ein kleines bisschen in der Grauzone der
          Regeln von Eressea. Normalerweise sollte eine Person nur die Befehle
          für eine Partei machen. Die Befehle für alle andere Parteien sollen
          der entsprechenden Person via Mail oder Sprache mitgeteilt werrden,
          um den Rollenspielcharakter zu erhalten. Dieses Plugin kürzt dieses
          Prozess 'etwas' ab.
        </p>
        <p>
          Außerdem ist anzumerken, dass dieses Plugin nur dann genutzt werden
          kann, wenn alle ihren kompletten Report mit den anderen teilen. So
          sieht jeder alles. Zurzeit ist es nicht möglich, diese Sichtbarkeit
          für einzelne Parteien einzuschränken. Dieses Feature ist geplant,
          aber die Umsetzung gestaltet sich schwierig. Denk mal alleine an die
          möglichlichen Berechtigungsstufen für eine Partei, eine Insel, eine
          Region oder eine Einheit. Außerdem ist wichtig anzumerken, dass der
          Serverbetreiber naturgemäß immer alle Reportdetails sehen könnte,
          weil auf seinem Rechner der Gesamtreport liegt.
        </p>
      </div>
    </div>
  </body>
</html>

