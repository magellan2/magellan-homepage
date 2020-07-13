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
      Magellan Plugins - Alliance Plugin
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
          Alliance Plugin
        </h3>
        <table summary="" cellspacing="0" cellpadding="1" border="0"  class="plugin">
          <tr class="plugin">
            <td class="plugin">
              Name:
            </td>
            <td class="plugin">
              Alliance Plugin
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Version:
            </td>
            <td class="plugin">
              0.1.alpha
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Description:
            </td>
            <td class="plugin">
              Serverbased management of alliance reports and commands
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Author:
            </td>
            <td class="plugin">
              Thoralf Rickert
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Website:
            </td>
            <td class="plugin">
              <a href="http://odyssey.log-out.net/" class=
              "externalLink">http://odyssey.log-out.net/</a>
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Download:
            </td>
            <td class="plugin">
              <a href="http://odyssey.log-out.net/download.php" class=
              "externalLink">http://odyssey.log-out.net/download.php</a>
            </td>
          </tr>
        </table>
         
        <p>
          This plugin makes it possible, that multiple factions can use on
          single report to manage commands ignoring any faction limits. So you
          can allow that one person manages one region or island alone and
          gives all commands for all allied factions in this region or island.
          The others merges your given commands to their own and send it to the
          Eressea server.
        </p>
        <p>
          Attention: This plugin is a little bit in the grey zone of the rules
          of Eressea. Normally a person should only make commands for his/her
          own faction. The commands for every other faction in the alliance
          should be communicated via voice or mail. This plugin shorten this
          process 'a little bit'.
        </p>
        <p>
          And this plugin is only really useful if you share your whole report
          with all other factions in the alliance. So, everybody sees
          everything. At the moment it is not possible to create a permission
          level for single factions. This feature is planned but it's not easy
          to develop. Only think about all the possible right levels for a
          single faction, island, region, unit. And you should be aware that
          all data from all reports uploaded to the server can be read by the
          owner of the server.
        </p>
      </div>
    </div>
  </body>
</html>

