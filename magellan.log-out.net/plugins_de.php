<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php
      $page = "plugins";
      $language = "de";
      include_once "head.php";
    ?>
    <title>
      Magellan Plugins
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
          Plugins
        </h3>
        <p>
          Plugins sind externe Module oder Erweiterungen, die sich in den
          Magellan Client einklinken und erweiterte Funktionen anbieten, die es
          so in Magellan nicht gibt. 
        </p>
        <p>
          Uns sind folgende Plugins bis dato bekannt:
        </p>
        <ul>
          <li>
            <a href="plugins_alliance_de.php">Alliance Plugin</a>
          </li>
          <li>
            <a href="plugins_extcmds_de.php">Extended Commands Plugin</a>
          </li>
          <li>
            <a href="plugins_mapcleaner_de.php">MapCleaner Plugin</a>
          </li>
          <li>
            <a href="plugins_mapedit_de.php">MapEdit Plugin</a>
          </li>
          <li>
            <a href="plugins_memorywatch_de.php">MemoryWatch Plugin</a>
          </li>
          <li>
            <a href="plugins_teacher_de.php">Teacher Plugin</a>
          </li>
        </ul>
        <p>
          Die Installation der meisten Plugins ist denkbar einfach. Jedes
          Plugin wird genauso wie Magellan als Installer JAR ausgeliefert. Wenn
          der Installer nach einem Installationspfad verlangt, nennt man ihm
          einfach den Pfad, in dem Magellan installiert ist. Der Installer
          prüft dann die vorhandene Magellan Version und installiert dann das
          Plugin an geeigneter Stelle. Nach dem nächsten Neustart von Magellan
          wird automatisch das Plugin erkannt und in den Client integriert.
        </p>
        <h2>
          Entwicklung von Plugins
        </h2>
        <p>
          Die Entwicklung von Plugins ist ebenfalls relativ einfach,
          vorausgesetzt man kennt sich in der Programmiersprache Java. Die
          Entwickler haben die bestehende Schnittstelle von Magellan 1.x
          erweitert. Man muss in seinem Projekt dann mindestens eine Klasse
          besitzen, die sich vom Interface
          <tt>magellan.client.extern.MagellanPlugIn</tt> ableitet und alle
          darin benötigten Methoden implementiert. Eine genaue Beschreibung für
          all die vielen Möglichkeiten des Clients findest Du in der API in den
          <a href="javadoc/">JavaDocs</a>.
        </p>
        <p>
          Hier nun eine kurze Beschreibung (HowTo) für den Installer.
        </p>
        <p>
          Wir gehen davon aus, dass das Plugin ein eigenes Projekt in Eclipse
          ist. Das Magellan2 Projekt MUSS ausgecheckt sein. Die
          Verzeichnisstruktur des Plugin Projekts sollte idealerweise so
          aussehen:
        </p>
<pre>
- src
   - ...Source files...
- doc
   - LICENSE.txt
   - CHANGELOG.txt
   - ....
- etc
   - ...message properties...what ever
- lib
   - ...optionale Bibliotheken...
- build.installer.xml
- izpack-install.xml
- README.txt
</pre>
        <p>
          In <tt>build.installer.xml</tt> sollten ein paar Variablen geändert
          werden:
        </p>
        <ul>
          <li>
            <tt>$plugin.name</tt> - Name des Plugins
          </li>
          <li>
            <tt>$magellan2</tt> - Verzeichnis von Magellan2-src (normalerweise
            ${basedir}/../Magellan2
          </li>
        </ul>
        <p>
          Außerdem sollte man folgendes machen
        </p>
        <ul>
          <li>
            Zeile 3 - den Kommentar ändern und
          </li>
          <li>
            Zeile 68 - die Ausgabe ändern und
          </li>
          <li>
            Zeile 76 - Autor entsprechend gesetzt werden.
          </li>
        </ul>
        <p>
          In <tt>izpack-install.xml</tt> muss folgendes gemacht werden
        </p>
        <ul>
          <li>
            Zeile 4 - Name des Plugins setzen
          </li>
          <li>
            Zeile 8 - Author(en) setzen
          </li>
          <li>
            Zeile 37 - Name des Plugins setzen
          </li>
          <li>
            Zeile 38 - Beschreibung des Plugins setzen
          </li>
        </ul>
        <p>
          Ja, das war's auch schon. Wenn man die beiden Dateien aus einem
          anderen Projekt kopiert, die Verzeichnisstruktur beibehält und die
          obigen Daten ändert, ist das eine Sache von 'ner knappen Minute.
          Gestartet wird das Target create-installer. Wenn man das macht, wird
          ein Verzeichnis release angelegt und darin ist das Plugin mit
          Installer.<br />
           ACHTUNG: Direkt im Hauptverzeichnis wird bei der Ausführung des
          Scripts auch ein JAR erzeugt, das ist aber nur der kompilierte Source
          des Plugins (kein Installer). Der befindet sich immer im Verzeichnis
          'release'.
        </p>
        <p>
        </p>
      </div>
    </div>
  </body>
</html>

