<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="SHORTCUT ICON" href="/favicon.ico" />
    <link rel="alternate stylesheet" href="http://eressea.sourceforge.net/magellan/classic.css" type="text/css" />
    <link rel="stylesheet" href="http://eressea.sourceforge.net/magellan/default.css" type="text/css" />
    <link rel="stylesheet" href="theme.css" type="text/css" />
    <title>Magellan Plugins - Extended Commands Plugin</title>
  </head>
  <body>
    <div id="container">
<?php
  $page = "plugins";
  $language = "en";
  include_once "navi_en.php";
  include_once "header.php"; 
?>
      <div id="center">
        <h3>
          Extended Commands
        </h3>
        <p>
          <table summary="" cellspacing="0" cellpadding="1" border="0" style="margin-left:10px;">
            <tr>
              <td>Name:</td>
              <td>Extended Commands</td>
            </tr>
            <tr>
              <td>Version:</td>
              <td>1.0.beta</td>
            </tr>
            <tr>
              <td>Kurzbeschreibung:</td>
              <td>Scriptbasierte Bearbeitung von Einheiten</td>
            </tr>
            <tr>
              <td>Autor:</td>
              <td>Thoralf Rickert</td>
            </tr>
            <tr>
              <td>Website:</td>
              <td><a href="extcmds/" class="externalLink">http://magellan.log-out.net/extcmds/</a></td>
            </tr>
            <tr>
              <td>Download</td>
              <td>Bestandteil des Magellan Clients.</td>
            </tr>
          </table>
        </p>
        <p><b>English version currently not available...coming soon...</b></p>
        <p>
          Bei den Extended Commands (oder kurz ExtCmds) handelt es sich um ein Plugin,
          mit dessen Hilfe man Einheiten scriptbasiert Befehle geben kann. Es erinnert
          im entferntesten Sinne an <a href="http://www.gulrak.net/wiki/view/Gulrak/EresseaTools#vorlage" 
          class="externalLink">Vorlage</a>, hat aber zwei entscheidende Unterschiede.
          Zum einen sind die Scripte eher auf Einheitenebene fokusiert. Sprich, man
          wählt eine Einheit aus und erstellt für sie einen Script. Zum zweiten baut
          ExtCmds auf BeanShell auf und ist damit sehr Java-ähnlich. Bei einer Ausführung
          innerhalb von Magellan kann das Script dann auf das reichhaltige Angebot von
          Magellan Funktionen zurückgreifen, um den Report zu analysieren.
        </p>
        <p>
          <img src="images/plugin_extcmds.png" alt="Extended Commands"/>
        </p>
        <p>
          Obwohl der Entwickler die Scripte primär für einzelne Einheiten definiert
          sieht, so kann man trotzdem an jedem sogenannten Container einen Script
          ausführen. Ein Container enthält Einheiten und das sind demzufolge Regionen,
          Parteien und Schiffe. So lässt sich schnell ein globaler Script für eine
          Region zusammenstellen, der zum Beispiel den Unterhalt organisiert. Damit
          Scripte nicht an jeder Einheit oder Region neu definiert werden müssen,
          obwohl sie gleich sind, kann man Funktionen schreiben und diese in einer
          globalen Bibliothek ablegen.
        </p>
      </div>
    </div>
  </body>
</html>

