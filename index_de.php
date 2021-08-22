<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    $page = "home";
    $language = "de";
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
            <h2>Was ist Magellan?</h2>
            <p>
                Magellan ist ein vollständiger Client für <a href="http://www.eressea.de/"
                    class="externalLink">Eressea</a> und andere <a
                    href="https://de.wikipedia.org/wiki/Pbem" class="externalLink">PBeM</a>. Man
                kann damit seine Karte anzeigen, suchen, Befehle geben ... und überhaupt braucht man
                das Programm fast nur noch zu verlassen, um Mails an die Verbündeten zu schreiben.
                Fast.
            </p>
            <p>
                <a href="images/magellan2.png" onfocus="if(this.blur()){this.blur();}"><img
                    src="images/magellan2-preview.png" border="0" alt="Magellan Desktop" /></a>
            </p>
            <p>Magellan2 benutzt Java 11 (oder höher) und ist damit auf gängigen
                Desktop-Betriebssystemen wie Windows, Linux und auch MacOS gleichermaßen lauffähig.
                Zu den viele Features gehören:</p>
            <ul>
                <li>Anzeige von Karte, Einheiten, Regionsdetails, und allen anderen
                    Reporteigenschaften. Dabei kann die Anordnung der verschiedenen Fenster frei
                    angepasst werden.</li>
                <li>Umfangreicher Befehlseditor mit Autovervollständigung und Syntaxcheck.</li>
                <li>Umfangreiche Vorhersagefunktionen etwa für Übergabe von Gegenständen und Routen.</li>
                <li>Weitgehende Überprüfung der Befehle und Anzeige "Offener Probleme". Macht
                    zusätzliche Werkzege wie ECheck überflüssig.</li>
                <li>Versand der Befehle per Email direkt aus dem Programm heraus.</li>
                <li>Im- und Export von Reports und Karten zum Austausch mit anderen Spielern.</li>
                <li>Schnelle Navigation durch Tastenkürzel, Suche nach Einheiten, Lesezeichen, ...</li>
                <li>Parteistatistiken mit Anzeige aller Gegenstände, Talente, Einkommen etc.</li>
                <li>Alchemieplaner zur Übersicht über Kräuter und Tränke.</li>
                <li>Weitgehende Einstellungsmöglichkeiten, um Magellan an die eigenen Vorlieben
                    anzupassen.</li>
                <li>Möglichkeit, Karten nach frei zu definierenden Kriterien einzufärben und zu
                    beschriften, um zum Beispiel Übersicht über Handelsgüterverteilung,
                    Bauernwachstum, Rohstoffverteilung oder andere Parteien zu erhalten.</li>
                <li>Programmierschnittstelle ExtendedCommands, um die Befehle beliebig zu
                    automatisieren.</li>
                <li>Plugins, mit denen die Möglichkeiten noch mehr erweitert werden können.</li>
            </ul>

            <h2>Was ist Magellan nicht?</h2>
            <p>
                Magellan ist nur eines von vielen <a
                    href="https://wiki.eressea.de/index.php/Befehle_einschicken#Hilfsmittel"
                    class="externalLink">Client-Programmen</a> für Eressea und steht in keinem
                Zusammenhang mit dem Eresseateam. Bitte wende dich daher bei Fragen und Problemen an
                die <a href="feedback_de.php">Magellan Community</a>.
            </p>

            <h2>Läuft Magellan auf meinem Rechner?</h2>
            <p>Dank Java läuft Magellan auf MS Windows, Linux, MacOS X und diversen anderen
                Betriebssystemen. Benötigt wird allerdings ein etwas leistungsfähigerer Rechner,
                gerade wenn die Partei wächst. Die Mindestausstattung liegt bei einem Prozessor mit
                450 MHz und 128 MB Hauptspeicher, empfehlenswert sind jedoch 800 MHz und 512 MB
                Hauptspeicher. Magellan läuft ab Java 11.</p>

            <h2 id="java">Java? Das kann ich nicht!</h2>
            <p>
                Kein Problem, das ist auch nicht nötig. Nach der einmaligen Installation von Java
                braucht man nur noch Magellan herunter zu laden - eine Datei, die man im
                Windows-Explorer per Doppelklick starten kann. Mit Programmieren in Java hat das
                alles nichts zu tun, damit müssen sich nur die Entwickler herumschlagen. Es gibt
                verschiedene Herausgeber von Java. Eine der einfachsten Möglichkeit, Java zu
                installieren ist der Download von <a href="https://adoptopenjdk.net/releases.html"
                    class="externalLink">AdoptOpenJDK</a>. Wir empfehlen zum Beispiel <a
                    href="https://openjdk.java.net/" class="externalLink">Open JDK</a> oder <a
                    href="https://www.oracle.com/java/" class="externalLink">Oracle Java SE</a>.
            </p>

            <h3>Welche Version sollte ich genau herunterladen?</h3>
            <p>Im Moment (Sommer 2021) haben wir die folgende Empfehlung, die für die meisten passen
                sollte:</p>
            <ul>
                <li>AdoptOpenJDK</li>
                <li>Natürlich die für dein Betriebssystem (Windows für die meisten)</li>
                <li>OpenJDK 11 (LTS), ab Herbst OpenJDK 17 (LTS)</li>
                <li>HotSpot JVM</li>
                <li>in der Regel x64</li>
            </ul>

            <h3>JRE oder JDK?</h3>
            <p>JDK ist normalerweise nur für Entwickler, JRE eher für Endbenutzer. Falls du die
                ExtendedCommands von Magellan benutzen willst, brauchst du ein JDK! Der einzige
                Nachteil des JDK ist die Größe. Wenn du also nicht besonders knapp an
                Festplattenplatz bist, nimm lieber ein JDK.</p>

            <h3>Welche Java-Version habe ich?</h3>
            <ol>
                <li>Öffne die Kommandozeile
                    <ul>
                        <li><b>Unter Windows: </b>Drücke die Windowstaste um das Startmenü
                            aufzumachen. Tippe dann 'cmd' um die 'Kommandozeile zu öffnen</li>
                        <li><b>Unter MacOsX: </b>Öffne Spotlight (Command + Leertaste oder klick auf
                            die Lupe rechts oben), dann gibt 'terminal' ein.</li>
                        <li><b>Unter Linux: </b>Öffne ein Terminal (je nach Linuxdistribution drücke
                            zum Beispiel die Windowstaste und gib Terminal ein).</li>
                    </ul>
                </li>
                <li>Tippe <code>java -version</code> und drücke <code>Enter</code>. Eine Ausgabe wie <code>'openjdk
                        version "11.0.10" 2021-04-20'</code> heißt zum Beispiel, dass du Version 11
                    hast. Eine Ausgabe wie "Befehl java nicht erkannt" heißt, dass du vermutlich
                    keine Java hast.
                </li>
            </ol>

            <h3>Ich bekomme folgende Fehlermeldung: 'Error: A JNI Error has occured, please check
                your installation and try again.'</h3>

            <p>Du hast wahrscheinlich nicht Java 11 sondern Java 8! Installiere Java 11 (siehe
                oben).</p>

            <h3>Die neueste Version auf java.com ist aber Version 8!</h3>
            <p>
                Seit dem Übergang von Java von Sun Microsystems an Oracle haben diese ein neues
                Lizenzmodell etabliert. Das hat die Herausgabe und Benutzung neuer
                Java-Implementationen verkompliziert. Deshalb ist für aktuelle Versionen <a
                    href="https://java.com">java.com</a> nicht mehr der Ort der Wahl. Stattdessen
                gibt es die oben genannten Alternativen.
            </p>

            <h3>Ich brauche aber Java 8 für ein anderes Program.</h3>

            <p>Du kannst Magellan trotzdem benutzen, aber du musst ein bisschen tricksen.</p>

            <p>
                <b>Unter Windows: </b>
                <ol>
                    <li>Installiere erst Java 11, dann wieder Java 8. Dein anderes Programm sollte
                        jetzt weiterhin funktionieren.</li>
                    <li>Finde den Installationspfad von Java 11 (zum Beispiel:
                        C:\Programme\jdk-11.0.1).</li>
                    <li>Finde die Datei magellan.bat (in der Regel in
                        C:\Programme\Magellan\magellan.bat).</li>
                    <li>Ändere diese Datei als Administrator. Gehe dazu etwa wie folgt vor: Finde im
                        Startmenü den Eintrag für "notepad". Mache einen Rechstklick darauf und
                        wähle "Mehr ... Als Administrator ausführen".</li>
                    <li>Öffne die Datei magellan.bat im Notepad.</li>
                    <li>Füge folgende Zeile am Anfang ein (angepasst an deinen Pfad in Schritt 2):<br />
                        <code>SET JAVA_HOME=C:\Programme\jdk-11.0.1</code>
                    </li>
                    <li>Speichere die Datei magellan.bat.</li>
                    <li>Jetzt solltest du Magellan mit Java 11 ausführen können.</li>
                </ol>
            </p>

            <p>
                <b>Unter Linux:</b>
            </p>
            <ol>
                <li>Installiere sowohl Java 8 als auch Java 11.</li>
                <li>Führe in der Kommandozeile folgendes Kommando aus: <code>update-alternatives
                        --config java</code>. Wähle die Version aus, die du für das andere Programm
                    benötigst.
                </li>
                <li>Notiere dir den Pfad zu Java 11 (zum Beispiel <code>/usr/lib/jvm/java-11-openjkd-amd64</code>).
                </li>
                <li>Finde die Datei magellan.sh (in der Regel $HOME/Magellan/magellan.sh).</li>
                <li>Ändere die Datei wie folgt: Füge die Zeile <code>export
                        JAVA_HOME=/usr/lib/jvm/java-11-openjdk-amd64</code> am Anfang ein (angepasst
                    an deine Installation).
                    <li>Ändere die letzte Zeile von <code>java -Xmx1200m -jar "magellan-client.jar"
                            "$@"</code> auf <code>$JAVA_HOME/bin/java -Xmx1200m -jar
                            "magellan-client.jar" "$@"</code> ab.
                </li>
                    <li>Speichere die Datei magellan.sh.</li>
                
                <li>Jetzt sollte Magellan mit Java 11 ausgeführt werden.</li>
            </ol>



            <h2>Ist Magellan gut?</h2>
            <!-- <img style="float: right; margin-left: 1em;"
                src="images/seal.png" border="0"
                alt="Enno's Seal of Excellence" /> -->
            <p>
                Nun - immerhin konnte Magellan Ennos <b>Seal of Excellence</b> einheimsen. Laut der
                <b>Spielerumfrage Ende 2001</b> scheint Magellan außerdem das bei den
                Eresseaspielern beliebteste Tool zu sein.
            </p>

            <h2>Wie sieht's mit der Weiterentwicklung aus?</h2>
            <p>
                Magellan ist ein Open-Source-Projekt, an dem sich mehrere Entwickler beteiligen.
                Dadurch ist sichergestellt, dass Anpassungen z.B. an Änderungen im CR immer sehr
                schnell umgesetzt werden. Durch Vorschläge und Hinweise können die Benutzer neue
                Ideen einbringen und Einfluss auf existierende Features nehmen. (<a
                    href="feedback_de.php">Feedback</a>)
            </p>
        </div>
    </div>
</body>
</html>

