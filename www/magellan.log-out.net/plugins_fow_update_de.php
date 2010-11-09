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
      Magellan Plugins - FogOfWar-Update Plugin
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
          FogOfWar-Update Plugin
        </h3>
        <table summary="" cellspacing="0" cellpadding="1" border="0" class=
        "plugin">
          <tr class="plugin">
            <td class="plugin">
              Name:
            </td>
            <td class="plugin">
              FogOfWar-Update Plugin
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
              Ändert die Aufdeckung des Nebels des Kriegs, ignoriert die Herkunft der Informationen.
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
              <a href="download_de.php#fow_update">http://magellan.log-out.net</a>
            </td>
          </tr>
        </table>
        <p>
        	Der alte Standard lüftete den FoW nur dann, wenn Informationen über eine Region
        	von einer priviligierten Partei stammten.<br>
        	Wurde aber ein Report hinzugefügt von einer nicht priviligierten Partei, wurden die in diesem
        	Report vollständig aufgeklärten Regionen nach dem Hinzufügen nicht auch im "neuen"
        	Report als aufgeklärt angezeigt.<br>
        	Mit diesem Update wird eine Region, über die genügend Informationen existieren, als "aufgeklärt"
        	angezeigt, egal woher die Informationen stammen (von "eigenen" Einheiten oder hinzugefügten).
        	<p>
        	Ab Version 2.0.6 wird nach heutigem Stand auch Magellan 2 dieses Verhalten aufweisen. In diesem Fall ist dieses
        	PlugIn für Version 2.0.6 und neuer nicht sinnvoll, sondern verändert lediglich das Verhalten der älteren Versionen.
        	</p>   
        </p>
        <hr>
        <table border=0>
        	<tr>
        		<td>
        			<img src="images/plugins_fow_update_exa_1.gif" alt="FoW Update Example 1" border="0" />
        		</td>
        		<td>
        			Altes Verhalten:<br>
        			Das weiße Kreuz zeigt an, dass ein befreundetes Schiff auch die unteren Ozeanfelder passiert hat.
        			Durch das Einfügen des Reports liegen auch alle Informationen über diese Felder vor.<br>
        			Der Nebel des Krieges wird trotzdem nicht gelüftet.
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/plugins_fow_update_exa_0.gif" alt="FoW Update Example 2" border="0" />
        		</td>
        		<td>
        			Neues Verhalten:<br>
        			Egal woher die Infos kommen, sowie ausreichend Infos vorhanden sind, wird der Nebel des Krieges gelüftet. 
        			So auch in den beiden unteren Ozeanregionen.
        		</td>
        	</tr>
        </table>
      </div>
    </div>
  </body>
</html>

