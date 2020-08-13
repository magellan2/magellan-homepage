<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    $page = "plugins";
    $language = "en";
    include_once "head.php";
    ?>
    <title>Magellan Plugins - Teacher Plugin</title>
</head>
<body>
    <div id="container">
      <?php
    include_once "navi_" . $language . ".php";
    include_once "header.php";
    ?>
      <div id="center">
            <h3>ShipLoader Plugin</h3>
            <table summary="" cellspacing="0" cellpadding="1" border="0" class="plugin">
                <tr class="plugin">
                    <td class="plugin">Name:</td>
                    <td class="plugin">ShipLoader Plugin</td>
                </tr>
                <tr class="plugin">
                    <td class="plugin">Version:</td>
                    <td class="plugin">0.2</td>
                </tr>
                <tr class="plugin">
                    <td class="plugin">Description:</td>
                    <td class="plugin">Loads units on ships</td>
                </tr>
                <tr class="plugin">
                    <td class="plugin">Author:</td>
                    <td class="plugin">stm</td>
                </tr>
                <tr class="plugin">
                    <td class="plugin">Website:</td>
                    <td class="plugin">---</td>
                </tr>
                <tr class="plugin">
                    <td class="plugin">Download:</td>
                    <td class="plugin"><a href="download_en.php#shiploader">Download page</a>
                    </td>
                </tr>
            </table>
            <p>Loads ships with units automatically using the available space as best as possible.</p>
            <ul>
                <li>select units in the overview</li>
                <li>right-click on a unit, select ShipLoader-add units to include units</li>
                <li>select and add ships in the same way</li>
                <li>choose Plugins--ShipLoader--Load!</li>
            </ul>
        </div>
    </div>
</body>
</html>

