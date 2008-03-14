<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="SHORTCUT ICON" href="/favicon.ico" />
    <link rel="alternate stylesheet" href="http://eressea.sourceforge.net/magellan/classic.css" type="text/css" />
    <link rel="stylesheet" href="http://eressea.sourceforge.net/magellan/default.css" type="text/css" />
    <link rel="stylesheet" href="theme.css" type="text/css" />
    <title>Magellan Plugins - Teacher Plugin</title>
  </head>
  <body>
    <div id="container">
<?php
  $page = "plugins";
  $language = "en";
  include_once "navi_en.php";
  include_once "header.php"; 
?>
      <div id="center">
        <h3>
          Teacher Plugin
        </h3>
        <p>
          <table summary="" cellspacing="0" cellpadding="1" border="0" style="margin-left:10px;">
            <tr>
              <td>Name:</td>
              <td>Teacher Plugin</td>
            </tr>
            <tr>
              <td>Version:</td>
              <td>0.5</td>
            </tr>
            <tr>
              <td>Kurzbeschreibung:</td>
              <td>Vereinfachte Lehrer-Schüler Operation</td>
            </tr>
            <tr>
              <td>Autor:</td>
              <td>stm</td>
            </tr>
            <tr>
              <td>Website:</td>
              <td><a href="teacher/">http://magellan.log-out.net/teacher</a></td>
            </tr>
            <tr>
              <td>Download</td>
              <td><a href="download_de.php#plugins">http://magellan.log-out.net/</a></td>
            </tr>
          </table>
        </p>
        <p><b>English version currently not available...coming soon...</b></p>
        <p>
          Das Teacher Plugin ermöglicht eine enge Kopplung zwischen Lehrer und Schüler.
          Durch die Definition von Metatags im Befehlsbereich einer Einheit werden Schüler
          und Lehrer für bestimmte Talente definiert. Das Plugin sucht dann die entsprechend
          beste Schüler-Lehrer-Kombination heraus und setzt an beiden Seiten die entsprechenden
          Befehle.
        </p>
        <p>
          Damit eine Einheit in diesem Prozess abgearbeitet werden kann, muss sie folgende
          Metatags enthalten.
          <pre>
            // $$L Talent1 value1 Talent2 value2</pre>
        </p>
        <p>
          steht für einen Schüler, der zwei unterschiedliche Talente auf unterschiedliche
          Level lernen soll.
          <pre>
             // $$L ALLES maxVal minVal</pre>
        </p>
        <p>
          steht für einen Schüler, der alle ihm bekannten Talente lernt. Der höchste Wert
          wird maxValue werden und der niedrigste minVal.
          <pre>
             // $$T Talent1 maxDiff1 Talent2 maxDiff2</pre>
        </p>
        <p>
          denotes a teacher teaching two skills. Students having a skill differing more than maxDiff from
          the teachers talent are penalized. maxDiff==0 has the special meaning that there is no such
          penalty. maxDiff==1 means that the teacher will not teach this talent
          <pre>
            // $$T ALLES maxDiff</pre>
        </p>
        <p>
          denotes a teacher teaching all the skills he knows.
          <pre>
            // $$T ALLES 0 Hiebwaffen 2</pre>
        </p>
        <p>
          would also be feasible
          <pre>
            // $namespace1$T ...</pre>
          <pre>
            // $namespace1$L ...</pre>
        </p>
        <p>
          defines an order belonging to a namespace; it can be used to teaching only to units with certain
          namespace
        </p>
        <p>
          It is feasible (in fact, desirable) for a unit to be teacher and student at the same time.
        </p>
      </div>
    </div>
  </body>
</html>

