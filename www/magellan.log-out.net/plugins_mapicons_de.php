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
              0.6
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Kurzbeschreibung:
            </td>
            <td class="plugin">
              Bestimmte Meldungen mit grösseren Icons in der Karte anzeigen
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
          großen Icons in der Übersichtskarte.<br>
          Die erfassten Meldungen sind unten in einer Tabelle zusammengefasst.<br>
          Mit Hilfe des PlugIn-Menus und/oder der Tastenkombination CTRL + M lassen 
          sich die Icons jederzeit aus- und einblenden.<br>
          Ab Version 0.5: Per Auswahl im Menü ist die Bewachung der Regionen visualisierbar.<br>
          Ab Version 0.6: Per Auswahl im Menü kann das Vorhandensein einer unbesetzten Burg angezeigt werden.<br> 
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
        			<img src="images/MIplugin_hunger.gif" alt="MapIcon Hunger" border="0" />
        		</td>
        		<td>
        			Hungernde Einheiten benötigen Hilfe.
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/MIplugin_specialevents.gif" alt="MapIcon Special Events" border="0" />
        		</td>
        		<td>
        			Man achte auf Regionsmeldungen! 
        			<br>
        			(Wurmlöcher, Einheiten erscheinen und verschwinden)
        			<br>
        			(Pestausbrüche u.v.m)
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/MIplugin_dieb.gif" alt="MapIcon Dieb" border="0" />
        		</td>
        		<td>
        			Man will uns Böses: wir wurden beklaut oder es wurde zumindest versucht, uns zu beklauen!
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/MIplugin_guard_friend.gif" alt="MapIcon Bewachung Freund" border="0" />
        		</td>
        		<td>
        			Diese Region wird von freundlichen Kräften bewacht. Gut so.
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/MIplugin_guard_enemy.gif" alt="MapIcon Bewachung Feind" border="0" />
        		</td>
        		<td>
        			Uns nicht freundlich gesinnte Kräfte (keine der priviligierten Parteien hat HELFE BEWACHE zu diesen) bewachen die Region.
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
        			(Ja, tatsächlich attackierten die Monster den Berg und bewegten sich dann in die Ebene)
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/plugins_mapicons_example2.gif" alt="MapIcon Example 2" border="0" />
        		</td>
        		<td>
        			Das passiert leider so häufig: Mein armer (untalentierter) Spion wird gefasst und ist zum Sterben durch Verhungern verurteilt.
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
        </table>
        
      </div>
    </div>
  </body>
</html>

