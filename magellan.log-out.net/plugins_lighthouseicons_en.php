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
              Description:
            </td>
            <td class="plugin">
              Shows maximal range of friendly and unfriendly lighthouses. Marks regions which are seen by a lighthouse only.
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
              <a href="download_en.php#lighthouseicons">http://magellan.log-out.net</a>
            </td>
          </tr>
        </table>
        <p>
          Planing your shiproutes seeing the range of the lighthouses will be easy.<br>
          Additional, oceanregions seen directly by a lighthouse are marked.
          <br>
          Since version 0.2: toggle icons with CTRL+L 
        </p><hr>
        <table border=0>
        	<tr>
        		<td bgcolor=blue>
        			<img src="images/LHIplugin_lh.gif" alt="MapIcon Leuchtturm" border="0" />
        		</td>
        		<td>
        			Region seen by a lighthouse, in which a trusted person sits in.
        		</td>
        	</tr>
        	<tr>
        		<td bgcolor=blue>
        			<img src="images/LHIplugin_lh_range.gif" alt="MapIcon Range" border="0" />
        		</td>
        		<td>
        			This Region is in range of an friendly lighthouse.
        		</td>
        	</tr>
        	<tr>
        		<td bgcolor=blue>
        			<img src="images/LHIplugin_lh_range_other.gif" alt="MapIcon Range Other" border="0" />
        		</td>
        		<td>
        			This Region is in range of an unfriendly (or empty) lighthouse.
        		</td>
        	</tr>
        	
        </table>
        
      
      </div>
    </div>
  </body>
</html>

