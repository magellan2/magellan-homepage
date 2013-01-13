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
      Magellan Plugins - MapIcons Plugin
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
          MapIcon Plugin
        </h3>
        <table summary="" cellspacing="0" cellpadding="1" border="0" class=
        "plugin">
          <tr class="plugin">
            <td class="plugin">
              Name:
            </td>
            <td class="plugin">
              MapIcons Plugin
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Version:
            </td>
            <td class="plugin">
              0.96 (Magellan 2.0.5)<br>
              0.99 (Magellan 2.0.6 (nightly))
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Kurzbeschreibung:
            </td>
            <td class="plugin">
              Bestimmte Meldungen mit gr�sseren Icons in der Karte anzeigen
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
              <a href="download_de.php#mapicons">http://magellan.log-out.net</a>
            </td>
          </tr>
        </table>
        <p>
          Dieses Plugin visualisiert wichtige Meldungen aus den Regionen mit auffallend 
          gro�en Icons in der �bersichtskarte.<br>
          Die erfassten Meldungen sind unten in einer Tabelle zusammengefasst.<br>
          Mit Hilfe des PlugIn-Menus und/oder der Tastenkombination CTRL + M lassen 
          sich die Icons jederzeit aus- und einblenden.<br>
          Ab Version 0.5: Per Auswahl im Men� ist die Bewachung der Regionen visualisierbar.<br>
          Ab Version 0.6: Per Auswahl im Men� kann das Vorhandensein einer unbesetzten Burg angezeigt werden.<br>
          Ab Version 0.7: Auch Vulkanausbr�che werden angezeigt, Juju-Zombies werden als Monster erkannt.<br>
          Ab Version 0.8: Eine Liste feindlicher Parteien wird per Icon angezeigt.<br> 
          Ab Version 0.9: Die Liste feindlicher Einheiten kann per Datei und per Einheiten befehl gef�llt werden.<br>
          Ab Version 0.92: Botschaften werden in der Region angezeigt, aus der sie gesendet wurden.<br>
          Ab Version 0.96: Anzeige der maximalen Talente, Kennzeichnung der Regionen mit Fehlern.<br>
          Ab Version 0.97: Alle Icons optional zuschaltbar, CTRL+M funktioniert wieder.<br>
          Ab Version 0.98: Anpassungen an Magellan-nightly, funktioniert nicht mehr mit Magellan 2.0.5!<br>
          Ab Version 0.99: Anzeige der Silberbest�nde nach selbst festgelegten Kategorien<br>
        </p><hr>
        <table border=0>
        	<tr>
        		<td>
        			<img src="images/MIplugin_battle.gif" alt="MapIcon Battle" border="0" />
        		</td>
        		<td>
        			Hier fand eine Schlacht statt.
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/MIplugin_monster.gif" alt="MapIcon Monster" border="0" />
        		</td>
        		<td>
        			In dieser Region treiben Monster und/oder Untote ihr Unwesen.
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/MIplugin_badmonster.gif" alt="MapIcon Bad Monster" border="0" />
        		</td>
        		<td>
        			In dieser Region treiben bespnders b�se Monster und/oder ganz fiese Untote ihr Unwesen.
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/MIplugin_hunger.gif" alt="MapIcon Hunger" border="0" />
        		</td>
        		<td>
        			Hungernde Einheiten ben�tigen Hilfe.
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/MIplugin_specialevents.gif" alt="MapIcon Special Events" border="0" />
        		</td>
        		<td>
        			Man achte auf Regionsmeldungen! 
        			<br>
        			(Wurml�cher, Einheiten erscheinen und verschwinden)
        			<br>
        			(Pestausbr�che u.v.m)
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/MIplugin_dieb.gif" alt="MapIcon Dieb" border="0" />
        		</td>
        		<td>
        			Man will uns B�ses: wir wurden beklaut oder es wurde zumindest versucht, uns zu beklauen!
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/MIplugin_guard_friend.gif" alt="MapIcon Bewachung Freund" border="0" />
        		</td>
        		<td>
        			Diese Region wird von freundlichen Kr�ften bewacht. Gut so.
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/MIplugin_guard_enemy.gif" alt="MapIcon Bewachung Feind" border="0" />
        		</td>
        		<td>
        			Uns nicht freundlich gesinnte Kr�fte (keine der priviligierten Parteien hat HELFE BEWACHE zu diesen) bewachen die Region.
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/MIplugin_empty_tower.gif" alt="MapIcon Leere Burg" border="0" />
        		</td>
        		<td>
        			Hier steht eine Burg leer. Rein da!?
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/MIplugin_enemy_present.gif" alt="MapIcon Feind" border="0" />
        		</td>
        		<td>
        			In dieser Region sind Einheiten von V�lkern, die auf der Liste feindlicher Parteien stehen<br>
        			Die anzuzeigenden Parteien k�nnen entweder in einer Datei im Magellanverzeichnis aufgef�hrt werden (Dateiname MIPlugin_Enemies.ini, jede Zeile eine Parteinummer), oder 
        			aber in den Befehlen beliebiger Einheiten (// EnemyFaction=abcd).
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/MIplugin_message.gif" alt="MapIcon Botschaft" border="0" />
        		</td>
        		<td>
        			Es wurde mindestens eine Botschaft von einer Einheit in dieser Region aus abgesetzt.
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/MIplugin_errors.gif" alt="MapIcon Fehler" border="0" />
        		</td>
        		<td>
        			In dieser Region wurde mindestens eine Fehlermeldung / Warnung vom Eressea Server kommend entdeckt.
        		</td>
        	</tr>
        	
        </table>
        
        <hr>
        Beispiele:
        <table border=0>
        	<tr>
        		<td>
        			<img src="images/plugins_mapicons_example1.gif" alt="MapIcon Example 1" border="0" />
        		</td>
        		<td>
        			Ooh, schlechte Neuigkeiten. Ein Kampf im Berg und diese Runde Monster bei meinen Schiffen!<br>
        			(Ja, tats�chlich attackierten die Monster den Berg und bewegten sich dann in die Ebene)
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/plugins_mapicons_example2.gif" alt="MapIcon Example 2" border="0" />
        		</td>
        		<td>
        			Das passiert leider so h�ufig: Mein armer (untalentierter) Spion wird gefasst und ist zum Sterben durch Verhungern verurteilt.
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/plugins_mapicons_example3.gif" alt="MapIcon Example 3" border="0" />
        		</td>
        		<td>
        			Nicht vergessen, hier genauer reinzuschauen. (War diesmal "nur" die Pest)
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/plugins_mapicons_example4.gif" alt="MapIcon Example 4" border="0" />
        		</td>
        		<td>
        			Ansicht aller maximalen bekannten Talentwerte auf einer kleiner Insel. Welche Insel, und welches Talent, ist nat�rlich geheim.
        		</td>
        	</tr>
        </table>
        
      </div>
    </div>
  </body>
</html>

