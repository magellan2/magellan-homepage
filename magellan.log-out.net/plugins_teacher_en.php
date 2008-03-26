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
          The Teacher Plugin allows automatic assignment of teachers to students.
          You have to assign certain special orders to the unit and Teacher will
          then try to assign teachers to students in the best possible way and 
          set the units' orders accordingly.
        </p>
        <p>
          You have to tell teacher which talents a unit should learn, how much
          the different talents are worth and which units should be teachers. 
          Teacher then tries to maximize the sum of all values of learning units. 
          The values of units with a teacher are doubled (roughly), because they will 
          learn twice as fast. You can specify (potential) teachers and students by 
          adding one or more of the following meta orders to the unit's orders. 
        </p>
<pre>
            // $$L Talent1 value1 Talent2 value2
</pre>
         
        <p>
          denotes a student learning two skills of different values.
        </p>
<pre>
             // $$L ALLES maxVal minVal
</pre>
         
        <p>
          denotes a student learning all the skills it already knows. Skills are given
          values proportional to the level of the skill.The unit's skill with
          the highest level will be given maxVal. The skill with the lowest level will
          be given minVal.
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

