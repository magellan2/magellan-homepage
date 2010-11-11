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
              Tats�chlich gesehene Regionen und maximale Reichweite freundlicher und andere Leuchtt�rme wird angezeigt.
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
          Die M�glichkeit, sich die Reichweite der Leuchtt�rme anzeigen zu lassen, vereinfacht die Routenplanung und gibt Aufschluss �ber die Aufkl�rungsdichte an der K�ste.<br>
          Zus�tzlich wird angezeigt, welche Regionen tats�chlich durch einen Leuchtturm aufgekl�rt worden sind.
          <br>
          Ab Version 0.2: Ein/Ausschalten mit ShortCut CTRL+L
        </p><hr>
        <table border=0>
        	<tr>
        		<td bgcolor=blue>
        			<img src="images/LHIplugin_lh.gif" alt="MapIcon Leuchtturm" border="0" />
        		</td>
        		<td>
        			Diese Region wurde durch einen "eigenen" Leuchtturm aufgekl�rt. Eine andere Quelle (eine eigene Durchschiffung oder ein eigenes Schiff zum jetzigen Zeitpunkt) existiert nicht.
        		</td>
        	</tr>
        	<tr>
        		<td bgcolor=blue>
        			<img src="images/LHIplugin_lh_range.gif" alt="MapIcon Monster" border="0" />
        		</td>
        		<td>
        			Diese Region liegt in Reichweite eines "freundlichen" Leuchtturms, allerdings findet sich im Report kein Hinweis darauf, ob diese Region tats�chlich von einem freundlichen Leuchtturm aus gesehen wurde. M�gliche Ursachen:
        			<ul>
        				<li>freundliche Durchschiffung</li>
        				<li>eigene Einheit jetzt in der Region</li>
        				<li>Leuchtturm nicht funktionsf�hig</li>
        				<li>Einheit nicht talentiert genug oder nicht "im" Leuchtturm</li>
        			</ul> 
        			(In den ersten beiden F�llen hat die Sichtbarkeit durch Durchschiffung oder durch Anwesenheit einer eigenen Einheit h�here Aussagekraft und verdr�ngt einen eventuellen Hinweis auf den Leuchtturm aus dem Report.) 
        		</td>
        	</tr>
        	<tr>
        		<td bgcolor=blue>
        			<img src="images/LHIplugin_lh_range_other.gif" alt="MapIcon Monster" border="0" />
        		</td>
        		<td>
        			Diese Region liegt in Reichweite eines "unfreundlichen" Leuchtturms. Ob allerdings dieser besetzt ist, oder funktioniert, kann nicht gesagt werden. Es wird lediglich die Reichweite eines in der Karte vorhandenen, leeren oder unfreundlich besetzten Leuchtturms angezeigt. 
        		</td>
        	</tr>
        	
        </table>
        
      
      </div>
    </div>
  </body>
</html>

