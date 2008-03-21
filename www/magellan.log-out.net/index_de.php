<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php
      $page = "home";
      $language = "de";
      include_once "head.php";
    ?>
    <title>
      Magellan
    </title>
  </head>
  <body>
    <div id="container">
      <?php 
        include_once "navi_".$language.".php";
        include_once "header.php"; 
      ?>
      <div id="center">
        <h3>
          Was ist Magellan?
        </h3>
        <p>
          Magellan ist ein vollständiger Client für 
          <a href="http://www.eressea.de/" class="externalLink">Eressea</a>. 
          Man kann damit seine Karte anzeigen, Suchen, Befehle geben, und 
          überhaupt braucht man das Programm fast nur noch zu verlassen, 
          um Mails an die Verbündeten zu schreiben. Fast.
        </p>
        <h3>
          Was ist Magellan 2.x?
        </h3>
        <p>
          Magellan 2.x ist eine konsequente Weiterentwicklung des Magellan
          Clients. Die Änderungen an diesem Client sind so umfassend, dass wir
          uns entschlossen haben, eine neue Versionsnummer zu vergeben.
        </p>
        <p>
          <a href="images/magellan2.png" onfocus="if(this.blur()){this.blur();}"><img src=
          "images/magellan2-preview.png" border="0" alt="Magellan Desktop"/></a>
        </p>
        <p>
          Magellan2 benötigt, im Gegensatz zu Magellan1 nun Java5 (1.5.0 oder
          höher). Außerdem handelt es sich bei der angebotenen JAR Datei nun um
          ein Setup-Programm, das den Client auspackt und auf Deinem PC
          installiert. Das Programm ist nun aufgeteilt in viele Dateien. Das bietet
          Euch recht einfach die Möglichkeit, Texte oder Icons an Eure
          Bedürfnisse anzupassen.
        </p>
        <p>
          Außerdem bietet Magellan2 noch einige Besonderheiten. Mit Hilfe des
          Infonode Docking Frameworks ist es nun möglich, die Oberfläche von
          Magellan seinen eigenen Bedürfnissen via Mausklick entsprechend zu
          gestalten, ohne auf Konfigurationsdateien zurückgreifen zu müssen.
          Darüberhinaus verfügt Magellan2 nun über eine getrennte
          Code-Struktur, um Server- oder Konsolen-basierte Anwendungen zu
          ermöglichen, ohne eine GUI Oberfläche haben zu müssen.
        </p>
        <h3>
          Was ist Magellan nicht?
        </h3>
        <p>
          Magellan ist nur eines von vielen 
          <a href="http://www.eressea.de/de/downloads.shtml" class="externalLink">Client Programmen</a>
          für Eressea und steht in keinem Zusammenhang mit dem Eresseateam. Bitte 
          wende dich daher bei Fragen und Problemen an die 
          <a href="feedback_de.php">Magellan Community</a>.
        </p>
        <h3>
          Läuft Magellan auf meinem Rechner?
        </h3>
        <p>
          Dank Java läuft Magellan auf MS Windows, Linux, MacOS X und diversen 
          anderen Betriebssystemen. Benötigt wird allerdings ein etwas 
          leistungsfähigerer Rechner, gerade wenn die Partei wächst. Die 
          Mindestausstattung liegt bei einem Prozessor mit 450 MHz und 128 MB 
          Hauptspeicher, empfehlenswert sind jedoch 800 MHz und 512 MB 
          Hauptspeicher. Magellan läuft ab Java 1.5.
        </p>
        <h3>
          Java? Das kann ich nicht!
        </h3>
        <p>
          Kein Problem, das ist auch nicht nötig. Nach der einmaligen 
          Installation von <a href="http://java.sun.com/javase/downloads/" 
          class="externalLink">Java</a> braucht man nur noch Magellan 
          <a href="download_de.php">herunterladen</a> - eine Datei, die man 
          im Windows-Explorer per Doppelklick starten kann. Mit 
          Programmieren in Java hat das alles nichts zu tun, damit müßen 
          sich nur die Entwickler herumschlagen.
        </p>
        <h3>
          Ist Magellan gut?
        </h3>
        <p>
          Nun - immerhin konnte Magellan inzwischen Ennos <b>Seal of 
          Excellence</b> einheimsen.<br/>
          Laut der <b>Spielerumfrage Ende 2001</b> scheint Magellan außerdem das 
          bei den Eressea Spielern beliebteste Tool zu sein.
        </p>
        <h3>
          Wie sieht's mit der Weiterentwicklung aus?
        </h3>
        <p>
          Magellan ist ein Open-Source Projekt, an dem sich mehrere Entwickler 
          beteiligen. Dadurch ist sichergestellt, dass Anpassungen z.B. an 
          Änderungen im CR immer sehr schnell umgesetzt werden. Durch Vorschläge 
          und Hinweise können die User neue Ideen einbringen und Einfluss auf 
          existierende Features nehmen. (<a href="feedback_de.php">Feedback</a>)
        </p>
      </div>
    </div>
  </body>
</html>

