<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php
      $page = "home";
      $language = "de";
      include_once "head.php";
    ?>
    <title>
      Magellan Extended Commands
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
          Was sind Extended Commands?
        </h3>
        <p>
          Bei den Extended Commands (kurz ExtCmds) handelt es sich um ein Plugin
          für Magellan 2.x mit dem man seine Einheiten Script-basiert Befehle
          geben kann. Es ähnelt in gewisser Weise dem 
          <a class="externalLink" href="http://www.gulrak.net/wiki/view/Gulrak/EresseaTools#vorlage">Vorlage-Tool</a>.
          Allerdings verwenden die ExtCmds eine Java-ähnliche Syntax, die meiner
          Meinung nach etwas verständlicher ist. Aber das ist Geschmackssache!
          Ein wirkliches Plus von ExtCmds ist, dass man direkten Zugriff auf
          die Fähigkeiten von Magellan hat und so zum Beispiel auch die geladene
          Karte scriptbasiert manipulieren kann (Setzen von Schildern usw.).
        </p>
        <p>
          Diese Webseite teilt sich grob in zwei Bereiche. Zum Einen geht es um die
          Nutzung des Plugins an sich. Also wie mache ich wo was, damit das Plugin
          sinnvoll funktioniert und zum anderen gibt es hier einige (vielleicht)
          nützliche Scriptbeispiele.
        </p>
      </div>
    </div>
  </body>
</html>

