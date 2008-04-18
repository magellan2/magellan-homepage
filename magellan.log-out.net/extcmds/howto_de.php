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
      Magellan Extended Commands
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
          Wie benutzt man das Extended Commands Plugin für Magellan 2.x?
        </h3>
        <p>
          Im Moment ist das Plugin Bestandteil der Standard-Distribution
          von Magellan. Es benötigt also keine Dokumentation zur Installation.
        </p>
        <p>
          Es gibt grob drei Punkte, die man ansteuern kann und sollte,
          um das Plugin zu nutzen. Wer einfach anfangen will, wählt sich eine
          Einheit seiner Wahl in der Regionsansicht aus und klickt mit der
          rechten Maustaste drauf. Dort gibt es den Menüpunkte "Erweiterte Befehle"
          mit dem Untermenüpunkt "Bearbeite &lt;Einheitenname&gt;". Klickt man
          diesen Punkt an, so öffnet sich ein Dialog, der wie folgt aussieht.
        </p>
        <p align="center">
          <img src="../images/plugin_extcmds.png" alt="Extended Commands"/>
        </p>
        <p>
         Im linken Teil findest du einen Editor-Bereich, in dem du später deine
         Scripte für diese Einheit angibst. Im rechten Teil findest du eine
         kurze Hilfe. Falls die Einheit noch nie Befehle bekommen hat, ist der
         linke Teil natürlich leer. Ich hoffe, die einzelnen Elemente
         des Dialogs sind selbsterklärend. Dem Thema Scripting ist ein gesondertes
         Kapitel gewidmet.
        </p>
        <p>
         Mit dem oben beschriebenen Weg bist du schon mal in der Lage einzelnen
         Einheiten Befehle zu geben. Dies funktioniert auch bei Burgen, Schiffen,
         Regionen und ganzen Parteien. Wobei dies alles sogenannte Container sind.
         Ihr Besonderheit ist, dass sie Einheiten enthalten können. Insofern gibt
         es eine grobe Trennung zwischen Einheit und Container. Das wirkt sich in
         zweierlei Art aus. Zum einen werden immer alle Scripte für Container
         vor den Scripten für Einheiten ausgeführt. Zum anderen sind die vordefinierten
         Variablen andere. Welche das sind, steht in der kurzen Hilfe im rechten
         Teil des Fensters.
        </p>
        <p>
         Wenn man Befehle hat, die sich immer wieder wiederholen, kommt natürlich
         schnell der Gedanke auf, dafür eine Funktion zu schreiben und diese dann
         nur noch aufzurufen. Dies reduziert deutlich den Aufwand für die
         Codepflege, weil man nur noch an einer Stelle etwas ändern muss. In
         den Extended Commands nennt sich dieses Konstrukt "Bibliothek" und kann
         über das Hauptmenü von Magellan unter "Plugins &gt; Erweiterte 
         Befehle &gt; Bibliothek bearbeiten" editiert werden. Hier kann man alles
         beliebige hinschreiben. Der Script wird bei der Ausführung vor jeden
         anderen Script gepackt. Es ist der ideale Ort, um bestimmte Pakete zu
         importieren und Funktionen zu definieren, die dann überall genutzt
         werden können.
        </p>
        <p>
         Als letzten Punkt steht natürlich die Ausführung der Scripte an der
         Reihe. Das geht schrittweise. Man kann die Scripte für einzelne Einheiten
         oder Container ausführen oder den gesamten Baum auf einmal ausführen.
         Dabei werden zunächst die Scripte für die Container und dann die Scripte
         für die Einheiten entsprechend ihrer Priorität ausgeführt. Zunächst die
         hoch priorisierten, dann die normalen und am Ende die niedrig priorisierten.
         So lassen sich einfach zu Beginn jeder Runde die Scripte ausführen und so
         für gut 70%-80% der Einheiten Befehle vordefinieren. Das spart doch Zeit, oder?
        </p>
      </div>
    </div>
  </body>
</html>

