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
      Magellan
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
          Was ist Magellan 2.x?
        </h3>
        <p>
          Magellan 2.x ist eine konsequente Weiterentwicklung des Magellan
          Clients. Die Änderungen an diesem Client sind so umfassend, dass wir
          uns entschlossen haben, eine neue Versionsnummer zu vergeben.
        </p>
        <p>
          Magellan2 benötigt, im Gegensatz zu Magellan1 nun Java5 (1.5.0 oder
          höher). Außerdem handelt es sich bei der angebotenen JAR Datei nun um
          einen Setup-Programm, das den Client auspackt und auf Deinem PC
          installiert. Das Programm ist aufgeteilt in viele Dateien. Das bietet
          Euch recht einfach die Möglichkeit, Texte oder Icons an Eure
          Bedürfnisse anzupassen.
        </p>
        <p>
          <a href="images/magellan2.png"><img src=
          "images/magellan2-preview.png" border="0" alt="Magellan Desktop"
          onfocus="if(this.blur()){this.blur();}" /></a>
        </p>
        <p>
          Außerdem bietet Magellan2 noch einige Besonderheiten. Mit Hilfe des
          Infonode Docking Frameworks ist es nun möglich, die Oberfläche von
          Magellan seinen eigenen Bedürfnissen via Mausklick entsprechend zu
          gestalten, ohne auf Konfigurationsdateien zurückgreifen zu müssen.
          Darüberhinaus verfügt Magellan2 nun über eine getrennte
          Code-Struktur, um Server- oder Konsolen-basierte Anwendungen zu
          ermöglichen, ohne eine GUI Oberfläche haben zu müssen.
        </p>
      </div>
    </div>
  </body>
</html>

