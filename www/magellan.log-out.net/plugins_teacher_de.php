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
        <table summary="" cellspacing="0" cellpadding="1" border="0" class=
        "plugin">
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
              0.10.5
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
               ---
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Download:
            </td>
            <td class="plugin">
              <a href=
              "download_de.php#teacher">http://magellan.log-out.net/</a>
            </td>
          </tr>
        </table>
        <p>
          Das Teacher-Plugin berechnet automatisch eine Zuweisung von Schülern
          zu Lehrern. Um an diesem Prozess teilzunehmen, muss die Einheit
          bestimmte Befehle erhalten, die für jedes Talent, das die Einheit lernen
          soll einen Wert definieren. Teacher versucht Schülern so Lehrern zuzuweisen,
          dass die Summe der Werte aller gelernten Talente maximiert wird. Schüler, die 
          einen Lehrer haben, werden dabei (ungefähr) doppelt bewertet, da sie Talente
          doppelt so schnell lernen.
        </p>
        <p>
          Damit eine Einheit in diesem Prozess abgearbeitet werden kann, müssen ihre
          Befehle einen oder mehrere der folgenden Metabefehle enthalten:
        </p>
<pre>
            // $$L wert Talent1 ziel1 max1 [Talent2 ziel2 max2]...
</pre>
         
        <p>
          steht für einen Schüler, der zwei unterschiedliche Talente mit 
          unterschiedlichen Werten lernen soll. 
        </p>
        <p>
     <ul>
     <li>
  wert    beeinflusst, wie wichtig diese Einheit ist. Einheiten mit hohem Wert werden bei der 
          Vergabe von Lehrern bevorzugt.  Sie können für den Anfang einfach alle Werte gleich setzen.
</li><li>
  ziel    ist der angestrebte Talentwert. 
</li><li>
  max     ist der maximale Talentwert.
</li></ul>

<p>
Eine Einheit mit "// $$L 100 Hiebwaffen 10 99 Ausdauer 5 99 Reiten 5 2" wird versuchen das 
Verhältnis zwischen ihrem Hiebwaffentalent und dem Ausdauertalent bei etwa 2:1 zu halten. Reiten 
wird sie bis Maximal Stufe 2 lernen.
        </p>

<pre>
             // $$T Talent1 maxDiff1 [Talent2 maxDiff2]...
</pre>
         
        <p>
          steht für einen Lehrer, der zwei Talente lehrt. Schüler, deren Talentwert
          um mehr als maxDiff vom Talentwert des Lehrers abweicht, werden gering
          bewertet. maxDiff==0 bedeutet, dass der Talentunterschied egal ist. 
          maxDiff==1 bedeutet, dass der Lehrer dieses Talent nicht lehren wird.
        </p>
<pre>
            // $$T ALLES maxDiff
</pre>
         
        <p>
          steht für einen Lehrer, der alle ihm bekannten Talente lehrt
        </p>
<pre>
            // $$T ALLES 0 Hiebwaffen 2
</pre>
         
        <p>
          ist auch zulässig.
        </p>
<pre>
            // $namespace1$T ...
</pre>
<pre>
            // $namespace1$L ...
</pre>
         
        <p>
          definiert einen Metabefehl, der zu einem sog. Namensraum gehört. Man kann
          den Einflussbereich der automatischen Lehre auf Einheiten in einem bestimmten
          Namensraum eingrenzen.  
        </p>
        <p>
          Eine Einheit, die Lehrer ist muss auch mindestens ein Talent lernen.
        </p>
      </div>
    </div>
  </body>
</html>

