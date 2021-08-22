<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    $page = "feedback";
    $language = "en";
    include_once "head.php";
    ?>
    <title>Magellan Feedback</title>
</head>
<body>
    <div id="container">
      <?php
    include_once "navi_" . $language . ".php";
    include_once "header.php";
    ?>
      <div id="center">
            <h2>Bugs in Magellan</h2>

            <p>
                For us as developers the error messages are a good start
                when tackling a problem. These can be found in the
                <code>errors.txt</code>
                file in the Magellan folder; please include these error
                messages if you have a problem with Magellan. To
                reproduce an error it may prove necessary to send in (an
                excerpt of) the used CR. These CRs are of course handled
                confidentially, and will be deleted after the issue has
                been resolved.
            </p>
            <a name="bugs"></a>
            <p>
                Please refer to this page if you want to report errors:
                <a href="https://magellan2.github.io/bugs">https://magellan2.github.io/bugs</a>
            </p>

            <h3>Feature wishes = further development</h3>

            <p>We try to develop Magellan according to the wishes of its
                users. Our bug tracker helps enormously in this, because
                all feature wishes are centrally and publicly available.</p>


            <h2>Eressea Community</h2>

            <p>
                Please leave your questions and remarks with the Eressea
                community channels. For the best way to do this - forum,
                IRC, Discord or whatnot - check the <a
                    href="https://www.eressea.de">Eressea home page</a>.
            </p>
        </div>
    </div>
</body>
</html>

