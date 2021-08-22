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
                Magellan is a full-featured client tool for the play-by-e-mail game <a
                    href="http://www.eressea.de/" class="externalLink">Eressea</a> and other PBeM
                games. It displays a map of your part of the Eressea world, supports you in writing
                orders, performs many complex calculations for you and is available completely in
                English.
            </p>
            <p>
                <a href="images/magellan2.png" onfocus="if(this.blur()){this.blur();}"><img
                    src="images/magellan2-preview.png" border="0" alt="Magellan Desktop" /></a>
            </p>
            <p>
                Magellan requires Java 11 (or higher) und thus can be run on many desktop operations
                systems like Windows, Linux, or MacOS. Among its many features are:
                <ul>
                    <li>Displaying of your map, units, region details and all other report objects.
                        You can freely configure windows as you prefer.</li>
                    <li>Order editor with auto completion and syntax check.</li>
                    <li>Wide range of projection features for item transfer, routes and other
                        things.</li>
                    <li>Comprehensive order checking and display of "open problems" making
                        additional tools like ECheck obsolete.</li>
                    <li>Send your orders by email directly from Magellan.</li>
                    <li>Im- and export if reports and maps, facilitating information exchange with
                        other players.</li>
                    <li>Easy navigation by keyboard shortcuts, quick search, bookmarks, ...</li>
                    <li>Faction statistics with display of items, skills, income etc.</li>
                    <li>Alchemy planner to get an overview of your herbs and potions.</li>
                    <li>Extensive configurability to adapt Magellan to your needs.</li>
                    <li>You can color or label your maps with self defined criteria to display, for
                        example, trade goods, raw materials, peasant growth, or other factions.</li>
                    <li>Programming interface ExtendedCommands for automating your orders.</li>
                    <li>Plugins, to extend Magellan's capabilities even further.</li>
                </ul>

                <h2>What is Magellan not?</h2>
                <p>
                    Magellan is only one among many other <a
                        href="https://wiki.eressea.de/index.php/Befehle_einschicken#Hilfsmittel"
                        class="externalLinks">client programs</a> for Eressea and is in no way
                    related to the developers of Eressea. To relieve them of unnecessary work please
                    contact the <a href="feedback_en.php">Magellan Community</a> in case you have
                    any questions or problems.
                </p>

                <h2>Can I Run Magellan on My Computer?</h2>
                <p>Magellan is built using the platform independent Java technology and therefore
                    runs on MS Windows, Linux, MacOS X and some other operating systems. However, it
                    requires a moderately powerful machine, especially when your faction grows
                    bigger. The minimum system requirements are a 450 MHz processor and 128 MB RAM,
                    but 800 MHz and 512 MB RAM are recommended. For Magellan, Java 11 or newer is
                    required.</p>

                <h2 id="java" >Java? What's That?</h2>
                <p>
                    Java is a platform independent programming system. Actually, you do not really
                    have to worry about that. After installing Java on your computer once, all you
                    need is to <a href="download_en.php">download</a> Magellan. Consisting only of a
                    single file, you can run it like any other program from then on. One of the
                    easiest ways to install Java right now is to download an installer from <a
                        href="https://adoptopenjdk.net/releases.html" class="externalLink">AdoptOpenJDK</a>.
                    There are several Java distributions. We recommend, for example, <a
                        href="https://openjdk.java.net/" class="externalLink">Open JDK</a> oder <a
                        href="https://www.oracle.com/java/" class="externalLink">Oracle Java SE</a>.
                </p>

                <h3>What Java version, exactly, should I download?</h3>
                <p>At this moment (summer 2021) we recommend the following version, that should work
                    for most users:</p>
                <ul>
                    <li>AdoptOpenJDK</li>
                    <li>You operating, naturally (Windows for most)</li>
                    <li>OpenJDK 11 (LTS), or, by autumn 2021, OpenJDK 17 (LTS)</li>
                    <li>HotSpot JVM</li>
                    <li>usually x64</li>
                </ul>

                <h3>JRE or JDK?</h3>
                <p>JDK is usually targeted at Java developers, JRE at end users. If you intend to
                    use the ExtendedCommands of Magellan, you will need a JDK! The only disadvantage
                    of getting a JDK is its size. So if you are not running short on disc space, a
                    JDK is recommended.</p>

                <h3>What version of Java do I have?</h3>
                <ol>
                    <li>Open a terminal (command line):
                        <ul>
                            <li><b>On Windows: </b>Press the windows key to open the start menu.
                                Type cmd to open the command line.</li>
                            <li><b>On MacOsX: </b>Open Spotlight (Command + Space or click on the
                                magnifying glass in the upper right), then enter 'terminal'.</li>
                            <li><b>On Linux: </b>Open a terminal (depending on your Linux
                                distribution open the program menu, for example by pressing the
                                windows key and enter "terminal").</li>
                        </ul>
                    </li>
                    <li>In the terminal type <code>java -version</code> und press <code>Enter</code>. An
                        output like <code>'openjdk version "11.0.10" 2021-04-20'</code> means that you
                        are running version 11. An output like "java is not recognized" or "command
                        not found" means that you apparently don't have java.
                    </li>
                </ol>
            
            
            <h3>I get this error message: 'Error: A JNI Error has occured, please check your
                installation and try again.'</h3>

            <p>You probably have Java 8 instead of Java 11! Install Java 11 (see above).</p>

            <h3>But the latest version on java.com is Java 8!</h3>
            <p>
                Since Oracle acquired Java from Sun Microsystems, there is a new license system that
                complicated the release of Java implementations for end users. Therefore <a
                    href="https://java.com">java.com</a> is no longer the site of choice. Please get
                Java from one of the sources mentioned above.
            </p>

            <h3>I need Java 8 for a different software.</h3>

            <p>You can use several versions of java simultaneously, but this requires some work.</p>

            <p>
                <b>On Windows: </b>
                <ol>
                    <li>Install Java 11, then Java 8. Your other software should now work normally.</li>
                    <li>Locate the path of your Java 11 installation (for example C:\Program
                        Files\jdk-11.0.1).</li>
                    <li>Locate the file magellan.bat (usually in C:\Program
                        Files\Magellan\magellan.bat).</li>
                    <li>Edit this file as administrator. This should work roughly as follows: Locate
                        the entry for "notepad" in the start menu. Right click it and choose "More
                        ... Run as administrator".</li>
                    <li>Open the file magellan.bat in the notepad.</li>
                    <li>Add this line at the start of the file (adapt it to your path from step 2):<br />
                        <code>SET JAVA_HOME=C:\Program Files\jdk-11.0.1</code>
                    </li>
                    <li>Save the file magellan.bat.</li>
                    <li>Magellan should now be started with Java 11.</li> 7
                </ol>
            </p>

            <p>
                <b>On Linux:</b>
            </p>
            <ol>
                <li>Install sowohl 11 as well as Java 8.</li>
                <li>Execute this command in a terminal: <code>update-alternatives --config java</code>.
                    Choose the java version you need for your other program.
                </li>
                <li>Remember the path to Java 11 displayed by the previous command (for instance, <code>/usr/lib/jvm/java-11-openjkd-amd64</code>).
                </li>
                <li>Locate the file magellan.sh (usually at $HOME/Magellan/magellan.sh).</li>
                <li>Edit this file as follows: Add this line at the start of the file (adapted to
                    the path recorded in step 3 above):<br /> <code>export
                        JAVA_HOME=/usr/lib/jvm/java-11-openjdk-amd64</code>
                
                <li>Change the last line from<br /> <code>java -Xmx1200m -jar "magellan-client.jar"
                        "$@"</code> to<br /> <code>$JAVA_HOME/bin/java -Xmx1200m -jar
                        "magellan-client.jar" "$@"</code>.
                </li>
                <li>Save the file magellan.sh.</li>

                <li>Magellan should now be executed with Java 11.</li>

            </ol>

            <h2>Is Magellan a Quality Product?</h2>
            <p>
                Well, for one thing, Magellan was able to achieve Enno's <b>Seal of Excellence</b>.
                According to the Eressea poll in December 2001 Magellan seems to be by far the most
                popular tool among the Eressea players.
            </p>
            <h2>Is Magellan Up-To-Date?</h2>
            <p>
                Magellan is an open source project with a bunch of developers ensuring that
                adaptations to the latest Eressea features are always available quickly. Also, the
                users form an integral part of the Magellan development process by bringing in
                enhancement requests and new ideas: (<a href="feedback_en.php">Feedback</a>)
            </p>

        </div>
    </div>
</body>
</html>

