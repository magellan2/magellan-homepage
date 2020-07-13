<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    $page = "tools";
    $language = "en";
    include_once "head.php";
    ?>
    <title>Magellan Tools - Console Merger</title>
</head>
<body>
    <div id="container">
      <?php
    include_once "navi_" . $language . ".php";
    include_once "header.php";
    ?>
      <div id="center">
            <h3>Console Merger</h3>
            <table summary="" cellspacing="0" cellpadding="1" border="0" class="plugin">
                <tr class="plugin">
                    <td class="plugin">Name:</td>
                    <td class="plugin">Console Merger Tool</td>
                </tr>
                <tr class="plugin">
                    <td class="plugin">Version:</td>
                    <td class="plugin">1.0.1</td>
                </tr>
                <tr class="plugin">
                    <td class="plugin">Description:</td>
                    <td class="plugin">This is a command line tool for merging Eressea reports. This
                        tool needs Java 6 and at least two reports.</td>
                </tr>
                <tr class="plugin">
                    <td class="plugin">Author:</td>
                    <td class="plugin">Thoralf</td>
                </tr>
                <tr class="plugin">
                    <td class="plugin">Website:</td>
                    <td class="plugin">-</td>
                </tr>
                <tr class="plugin">
                    <td class="plugin">Download:</td>
                    <td class="plugin"><a href="download_de.php#tools">http://magellan.narabi.de</a>
                    </td>
                </tr>
            </table>
            <p>
                Syntax:
                <code>java magellan.ext.console.merge.ConsoleMerger Parameter</code>
                <br /> Parameters: magellan_dir base_report merge_report result_report<br />

                <ul>
                    <li>magellan_dir - the directory that contains the Magellan settings (rules and
                        resources).</li>
                    <li>base_report - the original report.</li>
                    <li>merge_report - the report that should be merged to base_report</li>
                    <li>result_report - the destination file. If the file exists, it will be
                        overwritten.</li>
                </ul>
                alternative syntax:
                <code>java -jar consolemerger.jar Parameter</code>
                <br /> This program is aware of the file name extension and loads and saves the file
                in the given format.
            </p>
        </div>
    </div>
</body>
</html>

