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
          Wie benutzt man das Extended Commands Plugin f�r Magellan 2.x?
        </h3>
        <p>
          Im Moment ist das Plugin Bestandteil der Standard-Distribution
          von Magellan. Es ben�tigt also keine Dokumentation zur Installation.
        </p>
        <p>
          Es gibt grob drei Punkte, die man ansteuern kann und sollte,
          um das Plugin zu nutzen. Wer einfach anfangen will, w�hlt sich eine
          Einheit seiner Wahl in der Regionsansicht aus und klickt mit der
          rechten Maustaste drauf. Dort gibt es den Men�punkte "Erweiterte Befehle"
          mit dem Untermen�punkt "Bearbeite &lt;Einheitenname&gt;". Klickt man
          diesen Punkt an, so �ffnet sich ein Dialog, der wie folgt aussieht.
        </p>
        <p align="center">
          <img src="../images/plugin_extcmds.png" alt="Extended Commands"/>
        </p>
        <p>
         Im linken Teil findest du einen Editor-Bereich, in dem du sp�ter deine
         Scripte f�r diese Einheit angibst. Im rechten Teil findest du eine
         kurze Hilfe. Falls die Einheit noch nie Befehle bekommen hat, ist der
         linke Teil nat�rlich leer. Ich hoffe, die einzelnen Elemente
         des Dialogs sind selbsterkl�rend. Dem Thema Scripting ist ein gesondertes
         Kapitel gewidmet.
        </p>
        <p>
         Mit dem oben beschriebenen Weg bist du schon mal in der Lage einzelnen
         Einheiten Befehle zu geben. Dies funktioniert auch bei Burgen, Schiffen,
         Regionen und ganzen Parteien. Wobei dies alles sogenannte Container sind.
         Ihr Besonderheit ist, dass sie Einheiten enthalten k�nnen. Insofern gibt
         es eine grobe Trennung zwischen Einheit und Container. Das wirkt sich in
         zweierlei Art aus. Zum einen werden immer alle Scripte f�r Container
         vor den Scripten f�r Einheiten ausgef�hrt. Zum anderen sind die vordefinierten
         Variablen andere. Welche das sind, steht in der kurzen Hilfe im rechten
         Teil des Fensters.
        </p>
        <p>
         Wenn man Befehle hat, die sich immer wieder wiederholen, kommt nat�rlich
         schnell der Gedanke auf, daf�r eine Funktion zu schreiben und diese dann
         nur noch aufzurufen. Dies reduziert deutlich den Aufwand f�r die
         Codepflege, weil man nur noch an einer Stelle etwas �ndern muss. In
         den Extended Commands nennt sich dieses Konstrukt "Bibliothek" und kann
         �ber das Hauptmen� von Magellan unter "Plugins &gt; Erweiterte 
         Befehle &gt; Bibliothek bearbeiten" editiert werden. Hier kann man alles
         beliebige hinschreiben. Der Script wird bei der Ausf�hrung vor jeden
         anderen Script gepackt. Es ist der ideale Ort, um bestimmte Pakete zu
         importieren und Funktionen zu definieren, die dann �berall genutzt
         werden k�nnen.
        </p>
        <p>
         Als letzten Punkt steht nat�rlich die Ausf�hrung der Scripte an der
         Reihe. Das geht schrittweise. Man kann die Scripte f�r einzelne Einheiten
         oder Container ausf�hren oder den gesamten Baum auf einmal ausf�hren.
         Dabei werden zun�chst die Scripte f�r die Container und dann die Scripte
         f�r die Einheiten entsprechend ihrer Priorit�t ausgef�hrt. Zun�chst die
         hoch priorisierten, dann die normalen und am Ende die niedrig priorisierten.
         So lassen sich einfach zu Beginn jeder Runde die Scripte ausf�hren und so
         f�r gut 70%-80% der Einheiten Befehle vordefinieren. Das spart doch Zeit, oder?
        </p>
        <h3>BeanShell Syntax</h3>
        <p>
         Die Scriptsprache, in der man schreibt, nennt sich BeanShell. Sie ist Java
         sehr �hnlich und ist auch in Java selbst geschrieben. Die Sprache ist mehr
         oder weniger irgendwo zwischen Java 1.4 und Java 1.5. Es gibt Konstrukte
         f�r foreach, so wie man sie bei neueren Java's kennt. Andere Teile wie Generics
         kennt es aber nicht. Das ist aber nicht schlimm, man kann trotzdem darauf
         vertrauen.
        </p>
        <p>
          Ein paar Besonderheiten: Wenn man ernsthaft gro� angelegt Scripte schreiben
          will, sollte man in der Bibliothek zumindest die folgenden beiden Packages
          importieren. Damit hat man die gr�bste Klassendefinitionen von Magellan
          importiert.
        </p>
        <pre class="example">

import magellan.library.*;
import magellan.library.rules.*;
        </pre>
        <p>
          Der angesprochene Iterator funktioniert (im Gegensatz zum echten Java)
          auch ohne Cast und kann direkt aufgerufen werden. Zum Beispiel:
        </p>
        <pre class="example">
        
Map luxuryPrices = region.getPrices();
for (LuxuryPrice price : luxuryPrices.values()) {
  ...
}
        </pre>
        <p>
         Das vereinfacht das Scriptschreiben doch enorm.
        </p>
        <p>
         Bevor ich aber anfange, alle Einzelheiten der Sprache auseinanderzunehmen,
         verweise ich liebe auf die externe Dokumentation zu dieser Sprache von den
         Entwicklern. Ihr findet sie auf der Website 
         <a class="externalLink" href="http://www.beanshell.org/manual/">www.beanshell.org/manual/</a>
        </p>
      </div>
    </div>
  </body>
</html>

