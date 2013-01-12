<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
  <head>
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
    echo "<meta http-equiv=\"refresh\"CONTENT=\"0;URL=$part/\">";
    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  </head>
  <body bgcolor="#D5A983">
    <tt><a href="en/">Click here</a> to get to the english pages.<br>
    <a href="de/">Hier klicken</a> um zu den deutschen Seiten zu gelangen.<br>
    </tt>
  </body>
</html>

