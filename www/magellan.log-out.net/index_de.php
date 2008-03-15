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
          Clients. Die �nderungen an diesem Client sind so umfassend, dass wir
          uns entschlossen haben, eine neue Versionsnummer zu vergeben.
        </p>
        <p>
          Magellan2 ben�tigt, im Gegensatz zu Magellan1 nun Java5 (1.5.0 oder
          h�her). Au�erdem handelt es sich bei der angebotenen JAR Datei nun um
          einen Setup-Programm, das den Client auspackt und auf Deinem PC
          installiert. Das Programm ist aufgeteilt in viele Dateien. Das bietet
          Euch recht einfach die M�glichkeit, Texte oder Icons an Eure
          Bed�rfnisse anzupassen.
        </p>
        <p>
          <a href="images/magellan2.png"><img src=
          "images/magellan2-preview.png" border="0" alt="Magellan Desktop"
          onfocus="if(this.blur()){this.blur();}" /></a>
        </p>
        <p>
          Au�erdem bietet Magellan2 noch einige Besonderheiten. Mit Hilfe des
          Infonode Docking Frameworks ist es nun m�glich, die Oberfl�che von
          Magellan seinen eigenen Bed�rfnissen via Mausklick entsprechend zu
          gestalten, ohne auf Konfigurationsdateien zur�ckgreifen zu m�ssen.
          Dar�berhinaus verf�gt Magellan2 nun �ber eine getrennte
          Code-Struktur, um Server- oder Konsolen-basierte Anwendungen zu
          erm�glichen, ohne eine GUI Oberfl�che haben zu m�ssen.
        </p>
      </div>
    </div>
  </body>
</html>

