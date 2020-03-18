<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php
      $page = "tools";
      $language = "de";
      include_once "head.php";
    ?>
    <title>
      Magellan Tools - Console Merger
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
          Console Merger
        </h3>
        <table summary="" cellspacing="0" cellpadding="1" border="0" class=
        "plugin">
          <tr class="plugin">
            <td class="plugin">
              Name:
            </td>
            <td class="plugin">
              Console Merger Tool
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Version:
            </td>
            <td class="plugin">
              1.0.1
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Kurzbeschreibung:
            </td>
            <td class="plugin">
              Dieses Tool ist ein java-Programm, welches über die Kommandozeile aufgerufen wird und 2 Eressea-reporte zusammenfügt. Es benötigt mindestens Java 6 (Java 1.6).
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Autor:
            </td>
            <td class="plugin">
              Thoralf  
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
              <a href="download_en.php#tools">http://magellan.narabi.de</a>
            </td>
          </tr>
        </table>
        <p>
          Syntax:<br>
		  java magellan.ext.console.merge.ConsoleMerger Parameter<br>
		  Parameter: magellan_dir base_report merge_report result_report<br>
  		  magellan_dir  - das Verzeichnis, welches benötigte Magellan2-Dateien enthält. (Regeln und Ressourcen).<br>
          base_report   - der Oroginal-Report. <br>
  		  merge_report  - der zum <base_report> hinzuzufügende Report<br>
  		  result_report - Zieldatei. Falls diese existiert, wird sie überschrieben.<br>
  		  <br>
  		  möglicher anderer Aufruf:<br>
  		  java -jar consolemerger.jar Parameter <br><br>
		  Das Programm berücksichtigt Dateiendungen und lädt und speichert im entsprechenden Format.<br>
        </p>
      </div>
    </div>
  </body>
</html>

