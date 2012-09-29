<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php
      $page = "plugins";
      $language = "en";
      include_once "head.php";
    ?>
    <title>
      Magellan Plugins - MapIcon Plugin
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
          MapIcons Plugin
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
              0.96
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Description:
            </td>
            <td class="plugin">
              Specific messages are visualized on the map
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
              <a href="download_en.php#mapicons">http://magellan.log-out.net</a>
            </td>
          </tr>
        </table>
        <p>
          This plugin searches the region- and factionmessages and displays bigger sized
          icons over the proper regions on the map.<br>
          The icons and according messages are shown below.<br>
          Using the plugin-menu or the shortcut CTRL + M the icons can be toggled.
          
        </p><hr>
        <table border=0>
        	<tr>
        		<td>
        			<img src="images/MIplugin_battle.gif" alt="MapIcon Battle" border="0" />
        		</td>
        		<td>
        			A battle took place here.
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/MIplugin_monster.gif" alt="MapIcon Monster" border="0" />
        		</td>
        		<td>
        			Monsters or/and undeads are moving around.
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/MIplugin_hunger.gif" alt="MapIcon Hunger" border="0" />
        		</td>
        		<td>
        			Starving units need help.
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/MIplugin_specialevents.gif" alt="MapIcon Special Events" border="0" />
        		</td>
        		<td>
        			Take care of region-messages! 
        			<br>
        			(Wormholes, units appear and disappear)
        			<br>
        			(Diseases... and a lot more)
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/MIplugin_dieb.gif" alt="MapIcon Dieb" border="0" />
        		</td>
        		<td>
        			Alert! Some thiefs managed to steal silver - or at least had tried to do so.
        		</td>
        	</tr>
        	
        	<tr>
        		<td>
        			<img src="images/MIplugin_guard_friend.gif" alt="MapIcon Bewachung Freund" border="0" />
        		</td>
        		<td>
        			This region is guarded by friendly forces. Great!
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/MIplugin_guard_enemy.gif" alt="MapIcon Bewachung Feind" border="0" />
        		</td>
        		<td>
        			Some unfriendly people guarding this region (at least none of the priviliged factions has HELP GUARD to them). Take care!
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/MIplugin_empty_tower.gif" alt="MapIcon Leere Burg" border="0" />
        		</td>
        		<td>
        			Here is an empty castle. Should we enter ?!
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/MIplugin_enemy_present.gif" alt="MapIcon Enemy" border="0" />
        		</td>
        		<td>
        			In this region are units from a faction on the List of enemies.<br>
        			The List of enemies can be formed from a plain text file in the Magellan-directory (file name is MIPlugin_Enemies.ini, each line a faction number), or
        			from orders given to any unit (// EnemyFaction=abcd). 
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/MIplugin_message.gif" alt="MapIcon Message" border="0" />
        		</td>
        		<td>
        			At least one message from a unit in this region was detected. 
        		</td>
        	</tr>
        	
        </table>
        <hr>
        Some examples:
        <table border=0>
        	<tr>
        		<td>
        			<img src="images/plugins_mapicons_example1.gif" alt="MapIcon Example 1" border="0" />
        		</td>
        		<td>
        			Ooh, bad things. A battle in the mountain and now monsters with my ships!<br>
        			(Yes, the monsters attacked in the mountain and moved into the plain...)
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/plugins_mapicons_example2.gif" alt="MapIcon Example 2" border="0" />
        		</td>
        		<td>
        			That´s so typical. My poor (low level) spy is catched by local thiefs and is going to die...
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/plugins_mapicons_example3.gif" alt="MapIcon Example 3" border="0" />
        		</td>
        		<td>
        			I must not forget to look into that region.... (was a disease here)
        		</td>
        	</tr>
        </table>
      </div>
    </div>
  </body>
</html>

