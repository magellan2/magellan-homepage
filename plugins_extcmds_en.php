<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    $page = "plugins";
    $language = "en";
    include_once "head.php";
    ?>
    <title>Magellan Plugins - Extended Commands Plugin</title>
</head>
<body>
    <div id="container">
      <?php
    include_once "navi_" . $language . ".php";
    include_once "header.php";
    ?>
      <div id="center">
            <h3>Extended Commands</h3>
            <table summary="" cellspacing="0" cellpadding="1" border="0" class="plugin">
                <tr class="plugin">
                    <td class="plugin">Name:</td>
                    <td class="plugin">Extended Commands</td>
                </tr>
                <tr class="plugin">
                    <td class="plugin">Version:</td>
                    <td class="plugin">1.0.beta</td>
                </tr>
                <tr class="plugin">
                    <td class="plugin">Description:</td>
                    <td class="plugin">Java scripts for units</td>
                </tr>
                <tr class="plugin">
                    <td class="plugin">Author:</td>
                    <td class="plugin">Thoralf Rickert</td>
                </tr>
                <tr class="plugin">
                    <td class="plugin">Website:</td>
                    <td class="plugin"><a href="extcmds/" class="externalLink">http://magellan.narabi.de/extcmds/</a>
                    </td>
                </tr>
                <tr class="plugin">
                    <td class="plugin">Download</td>
                    <td class="plugin">Bestandteil des Magellan Clients.</td>
                </tr>
            </table>
            <p>
                The Extended Commands (or ExtCmds, for short) are a plugin allowing you to automate
                your or units' orders (or "script" them). I resembles <a
                    href="http://www.gulrak.net/wiki/view/Gulrak/EresseaTools#vorlage"
                    class="externalLink">Vorlage</a>, but there are two important differences:
                First, scripts are more focused on units. That is, you may chose a unit, write a
                script for it, and execute it later. Second, ExtCmds use JShell, so they are very
                Java-like. You can access all the functionality available to Magellan to analyze
                your report.
            </p>
            <p>
                <img src="images/plugin_extcmds.png" alt="Extended Commands" />
            </p>
            <p>Although the intention was to write scripts for singular units, you may also write a
                script for a so-called container. A container contains units and can be a region, a
                faction, a ship. You can also write your own global library that contains functions
                you can use in your other scripts.</p>
        </div>
    </div>
</body>
</html>

