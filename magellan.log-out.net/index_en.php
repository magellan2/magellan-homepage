<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php
      $page = "home";
      $language = "en";
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
          What is Magellan 2.x?
        </h3>
        <p>
          Magellan 2.x is a logical progression of the Magellan client. The
          changes in the software were so extensive that we decided to give
          it a new, much higher, version number.
        </p>
        <p>
          Magellan 2.x now needs, contrary to Magellan 1.x, Java5 (1.5.0 or
          higher). Additionally it is now a JAR file that has a setup that
          unpacks and installs the whole application on your computer. The
          application is now split into multiple files, so you're able to
          change texts and icons as you want.
        </p>
        <p>
          <a href="images/magellan2.png"><img src=
          "images/magellan2-preview.png" border="0" alt="Magellan Desktop"
          onfocus="if(this.blur()){this.blur();}" /></a>
        </p>
        <p>
          Magellan 2.x also offers some new features. With the help of the
          Infonode Docking Framework you can now customize your Magellan
          desktop to your own tastes and needs with a single mouse click. You
          don't need to edit any configuration files anymore. Furthermore
          Magellan 2.x now has a split code structure, which makes it possible to
          develop server or console applications without a graphical user
          interface.
        </p>
      </div>
    </div>
  </body>
</html>

