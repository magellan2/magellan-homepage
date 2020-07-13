<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    $page = "faq";
    $language = "en";
    include_once "head.php";
    ?>
    <title>Magellan F.A.Q.</title>
</head>
<body>
    <div id="container">
      <?php
    include_once "navi_" . $language . ".php";
    include_once "header.php";
    ?>
      <div id="center">
            <p>
                <iframe src="help/en/magellan/faq.html" width="100%" height="550" frameborder="0"
                    marginheight="0" marginwidth="0">
                    <p>
                        Go to the <a href="help/en/magellan/faq.html">FAQ</a> (frequently asked
                        questions).
                    </p>
                </iframe>
            </p>
        </div>
    </div>
</body>
</html>

