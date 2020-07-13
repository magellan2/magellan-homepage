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
            <h2>Java? Das kann ich nicht!</h2>
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

