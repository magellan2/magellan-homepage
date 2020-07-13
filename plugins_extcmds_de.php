<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    $page = "plugins";
    $language = "de";
    include_once "head.php";
    ?>
    <title>Magellan Plugins - Extended Commands Plugin</title>
</head>
<body>
    <div id="container">
      <?php
    include_once "navi_" . $language . ".php";
    include_once "header.php";
    ?>
      <div id="center">
            <h3>Extended Commands</h3>
            <table summary="" cellspacing="0" cellpadding="1" border="0" class="plugin">
                <tr class="plugin">
                    <td class="plugin">Name:</td>
                    <td class="plugin">Extended Commands</td>
                </tr>
                <tr class="plugin">
                    <td class="plugin">Version:</td>
                    <td class="plugin">1.0.beta</td>
                </tr>
                <tr class="plugin">
                    <td class="plugin">Kurzbeschreibung:</td>
                    <td class="plugin">Scriptbasierte Bearbeitung von Einheiten</td>
                </tr>
                <tr class="plugin">
                    <td class="plugin">Autor:</td>
                    <td class="plugin">Thoralf Rickert</td>
                </tr>
                <tr class="plugin">
                    <td class="plugin">Website:</td>
                    <td class="plugin"><a href="extcmds/" class="externalLink">http://magellan.narabi.de/extcmds/</a>
                    </td>
                </tr>
                <tr class="plugin">
                    <td class="plugin">Download:</td>
                    <td class="plugin">Bestandteil des Magellan Clients.</td>
                </tr>
            </table>
            <p>
                Bei den Extended Commands (oder kurz ExtCmds) handelt es sich um ein Plugin, mit
                dessen Hilfe man Einheiten scriptbasiert Befehle geben kann. Es erinnert im
                entferntesten Sinne an <a
                    href="http://www.gulrak.net/wiki/view/Gulrak/EresseaTools#vorlage"
                    class="externalLink">Vorlage</a>, hat aber zwei entscheidende Unterschiede. Zum
                einen sind die Scripte eher auf Einheitenebene fokussiert. Sprich, man wählt eine
                Einheit aus und erstellt für sie einen Script. Zum zweiten baut ExtCmds auf
                BeanShell auf und ist damit sehr Java-ähnlich. Bei einer Ausführung innerhalb von
                Magellan kann das Script dann auf das reichhaltige Angebot von Magellan Funktionen
                zurückgreifen, um den Report zu analysieren.
            </p>
            <p>
                <img src="images/plugin_extcmds.png" alt="Extended Commands" />
            </p>
            <p>Obwohl der Entwickler die Scripte primär für einzelne Einheiten definiert sieht, so
                kann man trotzdem an jedem sogenannten Container einen Script ausführen. Ein
                Container enthält Einheiten und das sind demzufolge Regionen, Parteien und Schiffe.
                So lässt sich schnell ein globaler Script für eine Region zusammenstellen, der zum
                Beispiel den Unterhalt organisiert. Damit Scripte nicht an jeder Einheit oder Region
                neu definiert werden müssen, obwohl sie gleich sind, kann man Funktionen schreiben
                und diese in einer globalen Bibliothek ablegen.</p>
        </div>
    </div>
</body>
</html>

