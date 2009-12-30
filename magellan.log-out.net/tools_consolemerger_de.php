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
              This tool is a commandline tool for merging Eressea reports together. This tool needs Java6 and at least 2 reports.
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
              Download
            </td>
            <td class="plugin">
              <a href="download_de.php#tools">http://magellan.log-out.net</a>
            </td>
          </tr>
        </table>
        <p>
          Syntax:<br>
		  java magellan.ext.console.merge.ConsoleMerger Parameter<br>
		  Parameter: magellan_dir base_report merge_report result_report<br>
  		  magellan_dir  - the directory that contains the magellan settings (rules and resources).<br>
          base_report   - the original report. <br>
  		  merge_report  - the report that should be merged to <base_report><br>
  		  result_report - the destination file. If the file exists, it'll be overwritten.<br>
  		  <br>
  		  other possible syntax:<br>
  		  java -jar consolemerger.jar Parameter <br><br>
		  This program is aware of the file name extension and loads and saves the file in the given format.<br>
        </p>
      </div>
    </div>
  </body>
</html>

