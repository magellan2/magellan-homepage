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
          Magellan ist ein vollst�ndiger Client f�r 
          <a href="http://www.eressea.de/" class="externalLink">Eressea</a>. 
          Man kann damit seine Karte anzeigen, Suchen, Befehle geben, und 
          �berhaupt braucht man das Programm fast nur noch zu verlassen, 
          um Mails an die Verb�ndeten zu schreiben. Fast.
        </p>
        <h3>
          Was ist Magellan 2.x?
        </h3>
        <p>
          Magellan 2.x ist eine konsequente Weiterentwicklung des Magellan
          Clients. Die �nderungen an diesem Client sind so umfassend, dass wir
          uns entschlossen haben, eine neue Versionsnummer zu vergeben.
        </p>
        <p>
          <a href="images/magellan2.png" onfocus="if(this.blur()){this.blur();}"><img src=
          "images/magellan2-preview.png" border="0" alt="Magellan Desktop"/></a>
        </p>
        <p>
          Magellan2 ben�tigt, im Gegensatz zu Magellan1 nun Java5 (1.5.0 oder
          h�her). Au�erdem handelt es sich bei der angebotenen JAR Datei nun um
          ein Setup-Programm, das den Client auspackt und auf Deinem PC
          installiert. Das Programm ist nun aufgeteilt in viele Dateien. Das bietet
          Euch recht einfach die M�glichkeit, Texte oder Icons an Eure
          Bed�rfnisse anzupassen.
        </p>
        <p>
          Au�erdem bietet Magellan2 noch einige Besonderheiten. Mit Hilfe des
          Infonode Docking Frameworks ist es nun m�glich, die Oberfl�che von
          Magellan seinen eigenen Bed�rfnissen via Mausklick entsprechend zu
          gestalten, ohne auf Konfigurationsdateien zur�ckgreifen zu m�ssen.
          Dar�berhinaus verf�gt Magellan2 nun �ber eine getrennte
          Code-Struktur, um Server- oder Konsolen-basierte Anwendungen zu
          erm�glichen, ohne eine GUI Oberfl�che haben zu m�ssen.
        </p>
        <h3>
          Was ist Magellan nicht?
        </h3>
        <p>
          Magellan ist nur eines von vielen 
          <a href="http://www.eressea.de/de/downloads.shtml" class="externalLink">Client Programmen</a>
          f�r Eressea und steht in keinem Zusammenhang mit dem Eresseateam. Bitte 
          wende dich daher bei Fragen und Problemen an die 
          <a href="feedback_de.php">Magellan Community</a>.
        </p>
        <h3>
          L�uft Magellan auf meinem Rechner?
        </h3>
        <p>
          Dank Java l�uft Magellan auf MS Windows, Linux, MacOS X und diversen 
          anderen Betriebssystemen. Ben�tigt wird allerdings ein etwas 
          leistungsf�higerer Rechner, gerade wenn die Partei w�chst. Die 
          Mindestausstattung liegt bei einem Prozessor mit 450 MHz und 128 MB 
          Hauptspeicher, empfehlenswert sind jedoch 800 MHz und 512 MB 
          Hauptspeicher. Magellan l�uft ab Java 1.5.
        </p>
        <h3>
          Java? Das kann ich nicht!
        </h3>
        <p>
          Kein Problem, das ist auch nicht n�tig. Nach der einmaligen 
          Installation von <a href="http://java.sun.com/javase/downloads/" 
          class="externalLink">Java</a> braucht man nur noch Magellan 
          <a href="download_de.php">herunterladen</a> - eine Datei, die man 
          im Windows-Explorer per Doppelklick starten kann. Mit 
          Programmieren in Java hat das alles nichts zu tun, damit m��en 
          sich nur die Entwickler herumschlagen.
        </p>
        <h3>
          Ist Magellan gut?
        </h3>
        <p>
          Nun - immerhin konnte Magellan inzwischen Ennos <b>Seal of 
          Excellence</b> einheimsen.<br/>
          Laut der <b>Spielerumfrage Ende 2001</b> scheint Magellan au�erdem das 
          bei den Eressea Spielern beliebteste Tool zu sein.
        </p>
        <h3>
          Wie sieht's mit der Weiterentwicklung aus?
        </h3>
        <p>
          Magellan ist ein Open-Source Projekt, an dem sich mehrere Entwickler 
          beteiligen. Dadurch ist sichergestellt, dass Anpassungen z.B. an 
          �nderungen im CR immer sehr schnell umgesetzt werden. Durch Vorschl�ge 
          und Hinweise k�nnen die User neue Ideen einbringen und Einfluss auf 
          existierende Features nehmen. (<a href="feedback_de.php">Feedback</a>)
        </p>
      </div>
    </div>
  </body>
</html>

