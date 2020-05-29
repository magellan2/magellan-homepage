<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    $page = "home";
    $language = "en";
    include_once "head.php";
    ?>
    <title>Magellan</title>
</head>
<body>
    <div id="container">
      <?php
    include_once "navi_" . $language . ".php";
    include_once "header.php";
    ?>
      <div id="center">
            <h2>What is Magellan?</h2>
            <p>
                Magellan is a full-featured client tool for the
                play-by-e-mail game <a href="http://www.eressea.de/"
                    class="externalLink">Eressea</a> and other PBeM
                games. It displays a map of your part of the Eressea
                world, supports you in writing orders, performs many
                complex calculations for you and is available completely
                in English.
            </p>
            <p>
                <a href="images/magellan2.png"
                    onfocus="if(this.blur()){this.blur();}"><img
                    src="images/magellan2-preview.png" border="0"
                    alt="Magellan Desktop" /></a>
            </p>
            <p>
                Magellan requires Java 11 (or higher) und thus can be
                run on many desktop operations systems like Windows,
                Linux, or MacOS. Among its many features are:
                <ul>
                    <li>Displaying of your map, units, region details
                        and all other report objects. You can freely
                        configure windows as you prefer.</li>
                    <li>Order editor with auto completion and syntax
                        check.</li>
                    <li>Wide range of projection features for item
                        transfer, routes and other things.</li>
                    <li>Comprehensive order checking and display of
                        "open problems" making additional tools like
                        ECheck obsolete.</li>
                    <li>Send your orders by email directly from
                        Magellan.</li>
                    <li>Im- and export if reports and maps, facilitating
                        information exchange with other players.</li>
                    <li>Easy navigation by keyboard shortcuts, quick
                        search, bookmarks, ...</li>
                    <li>Faction statistics with display of items,
                        skills, income etc.</li>
                    <li>Alchemy planner to get an overview of your herbs
                        and potions.</li>
                    <li>Extensive configurability to adapt Magellan to
                        your needs.</li>
                    <li>You can color or label your maps with self
                        defined criteria to display, for example, trade
                        goods, raw materials, peasant growth, or other
                        factions.</li>
                    <li>Programming interface ExtendedCommands for
                        automating your orders.</li>
                    <li>Plugins, to extend Magellan's capabilities even
                        further.</li>
                </ul>

                <h2>What is Magellan not?</h2>
                <p>
                    Magellan is only one among many other <a
                        href="https://wiki.eressea.de/index.php/Befehle_einschicken#Hilfsmittel"
                        class="externalLinks">client programs</a> for
                    Eressea and is in no way related to the developers
                    of Eressea. To relieve them of unnecessary work
                    please contact the <a href="feedback_en.php">Magellan
                        Community</a> in case you have any questions or
                    problems.
                </p>

                <h2>Can I Run Magellan on My Computer?</h2>
                <p>Magellan is built using the platform independent Java
                    technology and therefore runs on MS Windows, Linux,
                    MacOS X and some other operating systems. However,
                    it requires a moderately powerful machine,
                    especially when your faction grows bigger. The
                    minimum system requirements are a 450 MHz processor
                    and 128 MB RAM, but 800 MHz and 512 MB RAM are
                    recommended. For Magellan, Java 11 or newer is
                    required.</p>
                <h2>Java? What's That?</h2>
                <p>
                    Java is a platform independent programming system.
                    Actually, you do not really have to worry about
                    that. After installing Java on your computer once,
                    all you need is to <a href="download_en.php">download</a>
                    Magellan. Consisting only of a single file, you can
                    run it like any other program from then on. There
                    are several Java distributions. We recommend, for
                    example, <a href="https://openjdk.java.net/"
                        class="externalLink">Open JDK</a> oder <a
                        href="https://www.oracle.com/java/"
                        class="externalLink">Oracle Java SE</a>.
                </p>
                <h2>Is Magellan a Quality Product?</h2>
                <p>
                    Well, for one thing, Magellan was able to achieve
                    Enno's <b>Seal of Excellence</b>. According to the
                    Eressea poll in December 2001 Magellan seems to be
                    by far the most popular tool among the Eressea
                    players.
                </p>
                <h2>Is Magellan Up-To-Date?</h2>
                <p>
                    Magellan is an open source project with a bunch of
                    developers ensuring that adaptations to the latest
                    Eressea features are always available quickly. Also,
                    the users form an integral part of the Magellan
                    development process by bringing in enhancement
                    requests and new ideas: (<a href="feedback_en.php">Feedback</a>)
                </p>
        
        </div>
    </div>
</body>
</html>

