<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php
      $page = "plugins";
      $language = "en";
      include_once "head.php";
    ?>
    <title>
      Magellan Plugins - Teacher Plugin
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
          Teacher Plugin
        </h3>
        <p>
        </p>
        <table summary="" cellspacing="0" cellpadding="1" border="0" style=
        "margin-left:10px;">
          <tr class="plugin">
            <td class="plugin">
              Name:
            </td>
            <td class="plugin">
              Teacher Plugin
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Version:
            </td>
            <td class="plugin">
              0.5
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Kurzbeschreibung:
            </td>
            <td class="plugin">
              Vereinfachte Lehrer-Schüler Operation
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Autor:
            </td>
            <td class="plugin">
              stm
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Website:
            </td>
            <td class="plugin">
              <a href="teacher/">http://magellan.log-out.net/teacher</a>
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Download
            </td>
            <td class="plugin">
              <a href=
              "download_de.php#plugins">http://magellan.log-out.net/</a>
            </td>
          </tr>
        </table>
        <br />
        <br />
         
        <p>
          <b>English version currently not available...coming soon...</b>
        </p>
        <p>
          Das Teacher Plugin ermöglicht eine enge Kopplung zwischen Lehrer und
          Schüler. Durch die Definition von Metatags im Befehlsbereich einer
          Einheit werden Schüler und Lehrer für bestimmte Talente definiert.
          Das Plugin sucht dann die entsprechend beste
          Schüler-Lehrer-Kombination heraus und setzt an beiden Seiten die
          entsprechenden Befehle.
        </p>
        <p>
          Damit eine Einheit in diesem Prozess abgearbeitet werden kann, muss
          sie folgende Metatags enthalten.
        </p>
<pre>
            // $$L Talent1 value1 Talent2 value2
</pre>
         
        <p>
          steht für einen Schüler, der zwei unterschiedliche Talente auf
          unterschiedliche Level lernen soll.
        </p>
<pre>
             // $$L ALLES maxVal minVal
</pre>
         
        <p>
          steht für einen Schüler, der alle ihm bekannten Talente lernt. Der
          höchste Wert wird maxValue werden und der niedrigste minVal.
        </p>
<pre>
             // $$T Talent1 maxDiff1 Talent2 maxDiff2
</pre>
         
        <p>
          denotes a teacher teaching two skills. Students having a skill
          differing more than maxDiff from the teachers talent are penalized.
          maxDiff==0 has the special meaning that there is no such penalty.
          maxDiff==1 means that the teacher will not teach this talent
        </p>
<pre>
            // $$T ALLES maxDiff
</pre>
         
        <p>
          denotes a teacher teaching all the skills he knows.
        </p>
<pre>
            // $$T ALLES 0 Hiebwaffen 2
</pre>
         
        <p>
          would also be feasible
        </p>
<pre>
            // $namespace1$T ...
</pre>
<pre>
            // $namespace1$L ...
</pre>
         
        <p>
          defines an order belonging to a namespace; it can be used to teaching
          only to units with certain namespace
        </p>
        <p>
          It is feasible (in fact, desirable) for a unit to be teacher and
          student at the same time.
        </p>
      </div>
    </div>
  </body>
</html>

