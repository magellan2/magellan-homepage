<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    $page = "home";
    $language = "en";
    include_once "head.php";
    ?>
    <title>Magellan Extended Commands</title>
</head>
<body>
    <div id="container">
      <?php
    include_once "navi_" . $language . ".php";
    include_once "header.php";
    ?>
      <div id="center">
            <h3>What are Extended Commands?</h3>
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
                <b>English version, unfortunately, currently not available!</b>
            </p>
            <p>
                <img src="../images/plugin_extcmds.png" alt="Extended Commands" />
            </p>
        </div>
    </div>
</body>
</html>

