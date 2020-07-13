<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    $page = "tools";
    $language = "en";
    include_once "head.php";
    ?>
    <title>Magellan Tools</title>
</head>
<body>
    <div id="container">
      <?php
    include_once "navi_" . $language . ".php";
    include_once "header.php";
    ?>
      <div id="center">
            <h3>Tools</h3>
            <p>Tools are external programs that are connected in some way to the Magellan
                development and we think that they might be useful.</p>
            <p>Right now these tools are:</p>
            <ul>
                <li><a href="tools_consolemerger_en.php">Console Merger</a></li>
            </ul>
        </div>
    </div>
</body>
</html>
