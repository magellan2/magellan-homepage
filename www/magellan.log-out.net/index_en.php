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
          What is Magellan?
        </h3>
        <p>
          Magellan is a full-featured client tool for the play-by-e-mail game 
          <a href="http://www.eressea.de/" class="externalLink">Eressea</a>. 
          It displays a map of your part of the Eressea world, supports you 
          in writing orders, performs many complex calculations for you and is 
          available completely in English.
        </p>
        <h3>
          What is Magellan 2.x?
        </h3>
        <p>
          Magellan 2.x is a logical progression of the Magellan client. The
          changes in the software were so extensive that we decided to give
          it a new, much higher, version number.
        </p>
        <p>
          <a href="images/magellan2.png" onfocus="if(this.blur()){this.blur();}"><img src=
          "images/magellan2-preview.png" border="0" alt="Magellan Desktop"/></a>
        </p>
        <p>
          Magellan 2.x now needs, contrary to Magellan 1.x, Java5 (1.5.0 or
          higher). Additionally it is now a JAR file that has a setup that
          unpacks and installs the whole application on your computer. The
          application is now split into multiple files, so you're able to
          change texts and icons as you want.
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
        <h3>
          What is Magellan not?
        </h3>
        <p>
          Magellan is only one among many other <a href="http://www.eressea.de/de/downloads.shtml" 
          class="externalLinks">client programs</a> for Eressea and is in no way 
          related to the developers of Eressea. To 
          relieve them of unnecessary work please contact the 
          <a href="feedback_en.php">Magellan Community</a> in case you have any 
          questions or problems.
        </p>
        <h3>
          Can I Run Magellan on My Computer?
        </h3>
        <p>
          Magellan is built using the platform independent Java technology and 
          therefore runs on MS Windows, Linux, MacOS X and some other operating 
          systems. However, it requires a rather powerful machine, especially 
          when your faction grows bigger. The minimum system requirements are 
          a 450 MHz processor and 128 MB RAM, but 800 MHz and 512 MB RAM are 
          recommended. For Magellan Java 1.5 or newer is required.
        </p>
        <h3>
          Java? What's That?
        </h3>
        <p>
          Java is a platform independent programming system. Actually, you do 
          not really have to worry about that. After installing 
          <a href="http://java.sun.com/javase/downloads/" class="externalLink">Java</a>
          on your computer once, all you need is to <a href="download_en.php">download</a>
          Magellan.  Consisting only of a single file, you can run it like any other 
          program from then on.
        </p>
        <h3>
          Is Magellan a Quality Product?
        </h3>
        <p>
          Well, for one thing, Magellan was able to achieve Enno's <b>Seal of 
          Excellence</b>. According to the Eressea poll in December 2001 
          Magellan seems to be by far the most popular tool among the Eressea 
          players.
        </p>
        <h3>
          Is Magellan Up-To-Date?
        </h3>
        <p>
          Magellan is an open source project with a bunch of developers ensuring 
          that adaptations to the latest Eressea features are always available 
          quickly. Also, the users form an integral part of the Magellan 
          development process by bringing in enhancement requests and new 
          ideas: (<a href="feedback_en.php">Feedback</a>)
        </p>
      </div>
    </div>
  </body>
</html>

