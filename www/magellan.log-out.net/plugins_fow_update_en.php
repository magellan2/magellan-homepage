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
              Description:
            </td>
            <td class="plugin">
              Changes the lifting of the Fog of War (FoW), ignores sources of information.
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Author:
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
              <a href="download_en.php#fow_update">http://magellan.log-out.net</a>
            </td>
          </tr>
        </table>
        <p>
        	"Normal" Magellan will lift the FoW only, if units of priviliged factions have passed a region.<br>
        	If a report from a non-priviliged faction is added to the main report, regions for which we have full information in the added report will
        	have the FoW not lifted, because of the priviliged-status.<br>
        	With this plugin a region, for which we have enough information, will loose it´s FoW. That´s independent from the source of the information.  
        	
        	<p>
        	From Version 2.0.6 probably Magellan 2 will have this behaviour too. If soo, this plugin is not needed for versions 2.0.6 and later.<br>
        	It will only change something in older versions (2.0.5 and before).
        	</p>   
        </p>
        <hr>
        <table border=0>
        	<tr>
        		<td>
        			<img src="images/plugins_fow_update_exa_1.gif" alt="FoW Update Example 1" border="0" />
        		</td>
        		<td>
        			
        			Old behaviour:<br>
        			The white cross marks the way of a friendly ship. Allthough we have full information after report merging
        			about the 2 ocean regions in the south, the FoW of these regions is not liftet. 
        			
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="images/plugins_fow_update_exa_0.gif" alt="FoW Update Example 2" border="0" />
        		</td>
        		<td>
        			New behaviour:<br>
        			If we have the information - we lift the FoW. It´s not important, from which source we have this information.
        			
        		</td>
        	</tr>
        </table>
      </div>
    </div>
  </body>
</html>

