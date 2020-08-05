<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    $page = "plugins";
    $language = "de";
    include_once "head.php";
    ?>
    <title>Magellan Plugins</title>
</head>
<body>
    <div id="container">
      <?php
    include_once "navi_" . $language . ".php";
    include_once "header.php";
    ?>
      <div id="center">
            <h3>Plugins</h3>
            <p>Plugins sind externe Module oder Erweiterungen, die sich in den Magellan-Client
                einklinken und erweiterte Funktionen anbieten, die es so in Magellan nicht gibt.</p>
            <p>Uns sind folgende Plugins bis dato bekannt:</p>
            <ul>
                <li><a href="plugins_alliance_de.php">Alliance Plugin</a></li>
                <li><a href="plugins_extcmds_de.php">Extended Commands Plugin</a></li>
                <li><a href="plugins_mapcleaner_de.php">MapCleaner Plugin</a></li>
                <li><a href="plugins_mapedit_de.php">MapEdit Plugin</a></li>
                <li><a href="plugins_memorywatch_de.php">MemoryWatch Plugin</a></li>
                <li><a href="plugins_mapicons_de.php">MapIcons Plugin</a></li>
                <li><a href="plugins_statistics_de.php">Statistics Plugin</a></li>
                <li><a href="plugins_teacher_de.php">Teacher Plugin</a></li>
            </ul>
            <p>Die Installation der meisten Plugins ist denkbar einfach. Jedes Plugin wird genauso
                wie Magellan als Installer JAR ausgeliefert. Wenn der Installer nach einem
                Installationspfad verlangt, nennt man ihm einfach den Pfad, in dem Magellan
                installiert ist. Der Installer prüft dann die vorhandene Magellan Version und
                installiert dann das Plugin an geeigneter Stelle. Nach dem nächsten Neustart von
                Magellan wird automatisch das Plugin erkannt und in den Client integriert.</p>
            <h2>Entwicklung von Plugins</h2>
            <p>
                Die Entwicklung von Plugins ist ebenfalls relativ einfach, vorausgesetzt man kennt
                sich in der Programmiersprache Java. Die Entwickler haben die bestehende
                Schnittstelle von Magellan 1.x erweitert. Man muss in seinem Projekt dann mindestens
                eine Klasse besitzen, die sich vom Interface
                <code>magellan.client.extern.MagellanPlugIn</code>
                ableitet und alle darin benötigten Methoden implementiert. Eine genaue Beschreibung
                für all die vielen Möglichkeiten des Clients findest Du in der API in deiner lokalen
                Magellaninstallation unter
                <code>doc/api</code>
                oder im Quellcode auf GitHub.
            </p>
            <p>Hier nun eine kurze Beschreibung (HowTo) für den Installer.</p>
            <p>Für die Entwicklung mit Eclipse muss das Plugin ein eigenes Projekt in Eclipse sein.
                Das Magellan2-Projekt muss ebenfalls vorhanden sein. Die Verzeichnisstruktur des
                Plugin-Projekts sollte etwa so aussehen:</p>
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
- izpack-install.template.xml
- README.md
</pre>
            <p>
                In
                <code>build.installer.xml</code>
                (das von einem anderen Plugin übernommen werden kann) sollten ein paar Variablen
                geändert werden:
            </p>
            <ul>
                <li><code>plugin.displayname</code> - Name des Plugins</li>
                <li><code>plugin.basename</code> - Namensbestandteil von Verzeichnissen und des
                    installers</li>
                <li><code>plugin.author</code> - Name des Autors</li>
                <li><code>plugin.author.email</code> - Mailadresse</li>
                <li><code>plugin.version</code> - Aktuelle Versionsnummer (Buildnummer wird
                    außerdem automatisch erzeugt)</li>
                <li><code>plugin.description</code> - Kurzbeschreibung, was das Plugin macht</li>
                <li><code>magellan2</code> - Verzeichnis von Magellan2-src (normalerweise <code>${basedir}/../Magellan2</code>
                </li>
            </ul>
            <p>
                Die Datei
                <code>izpack-install.template.xml</code>
                muss in der Regeln nicht angefasst werden.
            </p>
            <p>
                Ja, das war's auch schon. Wenn man die beiden Dateien aus einem anderen Projekt
                kopiert, die Verzeichnisstruktur beibehält und die obigen Daten ändert, ist das eine
                Sache von 'ner knappen Minute. Gestartet wird das Target create-installer (das
                default target). Wenn man das macht, wird ein Verzeichnis release angelegt und darin
                ist das Plugin mit Installer.<br /> ACHTUNG: Direkt im Hauptverzeichnis wird bei der
                Ausführung des Scripts auch ein JAR erzeugt, das ist aber nur der kompilierte Source
                des Plugins (kein Installer). Der befindet sich immer im Verzeichnis 'release'.
            </p>
        </div>
    </div>
</body>
</html>
