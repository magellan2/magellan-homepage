<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
  <head>
<?php
  $page = "";
  $language = "";
  include_once "head.php";
?>
    <title>
      Magellan
    </title>
    <?php
    $acceptLang=(($_SERVER["HTTP_ACCEPT_LANGUAGE"] == '') ? '*' :

    $_SERVER["HTTP_ACCEPT_LANGUAGE"]);
    $alparts=@preg_split("/,/",$acceptLang);
    foreach($alparts as $part) {
        $part=trim($part);
        if(preg_match("/;/", $part)) {
            $lang=@preg_split("/;/",$part);
            $part=$lang[0];
        }
        if ($part == 'de') break;
        if ($part == 'en') break;
        $part = 'en';
    }
    echo "<meta http-equiv=\"refresh\"CONTENT=\"0;URL=index_".$part.".php\">";
    ?>
  </head>
  <body bgcolor="#D5A983">
    <tt><a href="index_en.php">Click here</a> to get to the english pages.<br>
    <a href="index_de.php">Hier klicken</a> um zu den deutschen Seiten zu gelangen.<br>
    </tt>
  </body>
</html>
