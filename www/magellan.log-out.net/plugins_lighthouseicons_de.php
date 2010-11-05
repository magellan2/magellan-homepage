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
      Magellan Plugins - LightHouseIcons Plugin
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
          LightHouseIcons Plugin
        </h3>
        <table summary="" cellspacing="0" cellpadding="1" border="0" class=
        "plugin">
          <tr class="plugin">
            <td class="plugin">
              Name:
            </td>
            <td class="plugin">
              LightHouseIcons Plugin
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Version:
            </td>
            <td class="plugin">
              0.2
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Kurzbeschreibung:
            </td>
            <td class="plugin">
              Tatsächlich gesehene Regionen und maximale Reichweite freundlicher und andere Leuchttürme wird angezeigt.
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
              --
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Download:
            </td>
            <td class="plugin">
              <a href="download_de.php#lighthouseicons">http://magellan.log-out.net</a>
            </td>
          </tr>
        </table>
        <p>
          Die Möglichkeit, sich die Reichweite der Leuchttürme anzeigen zu lassen, vereinfacht die Routenplanung und gibt Aufschluss über die Aufklärungsdichte an der Küste.<br>
          Zusätzlich wird angezeigt, welche Regionen tatsächlich durch einen Leuchtturm aufgeklärt worden sind.
          <br>
          Ab Version 0.2: Ein/Ausschalten mit ShortCut CTRL+L
        </p><hr>
        <table border=0>
        	<tr>
        		<td bgcolor=blue>
        			<img src="images/LHIplugin_lh.gif" alt="MapIcon Leuchtturm" border="0" />
        		</td>
        		<td>
        			Diese Region wurde durch einen "eigenen" Leuchtturm aufgeklärt, eine eigene Durchschiffung fand nicht statt.
        		</td>
        	</tr>
        	<tr>
        		<td bgcolor=blue>
        			<img src="images/LHIplugin_lh_range.gif" alt="MapIcon Monster" border="0" />
        		</td>
        		<td>
        			Diese Region liegt in Reichweite eines "freundlichen" Leuchtturms.
        		</td>
        	</tr>
        	<tr>
        		<td bgcolor=blue>
        			<img src="images/LHIplugin_lh_range_other.gif" alt="MapIcon Monster" border="0" />
        		</td>
        		<td>
        			Diese Region liegt in Reichweite eines "unfreundlichen" Leuchtturms.
        		</td>
        	</tr>
        	
        </table>
        
      
      </div>
    </div>
  </body>
</html>

