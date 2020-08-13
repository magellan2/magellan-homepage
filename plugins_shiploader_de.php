<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    $page = "plugins";
    $language = "de";
    include_once "head.php";
    ?>
    <title>Magellan Plugins - Teacher Plugin</title>
</head>
<body>
    <div id="container">
      <?php
    include_once "navi_" . $language . ".php";
    include_once "header.php";
    ?>
      <div id="center">
            <h3>ShipLoader Plugin</h3>
            <table summary="" cellspacing="0" cellpadding="1" border="0" class="plugin">
                <tr class="plugin">
                    <td class="plugin">Name:</td>
                    <td class="plugin">ShipLoader Plugin</td>
                </tr>
                <tr class="plugin">
                    <td class="plugin">Version:</td>
                    <td class="plugin">0.2</td>
                </tr>
                <tr class="plugin">
                    <td class="plugin">Kurzbeschreibung:</td>
                    <td class="plugin">Belädt Schiffe mit Einheiten</td>
                </tr>
                <tr class="plugin">
                    <td class="plugin">Autor:</td>
                    <td class="plugin">stm</td>
                </tr>
                <tr class="plugin">
                    <td class="plugin">Website:</td>
                    <td class="plugin">---</td>
                </tr>
                <tr class="plugin">
                    <td class="plugin">Download:</td>
                    <td class="plugin"><a href="download_de.php#shiploader">https://magellan.narabi.de/</a>
                    </td>
                </tr>
            </table>
            <p>Belädt automatisch Schiffe mit Einheiten, so dass der vorhandene Platz möglichst gut
                aufgeteilt wird.</p>
            <ul>
                <li>Einheiten in der Einheitenübersicht auswählen</li>
                <li>Im Rechtsklickmenü "ShipLoader-Einheiten hinzufügen" auswählen</li>
                <li>Schiffe werden auf die selbe Art hinzugefügt</li>
                <li>Wähle im Menü Plugins--ShipLoader--Beladen!</li>
                <li>BETRETE-Befehle werden bei den beladenen Einheiten hinzugefügt</li>
            </ul>
        </div>
    </div>
</body>
</html>

