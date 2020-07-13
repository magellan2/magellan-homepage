<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    $page = "feedback";
    $language = "de";
    include_once "head.php";
    ?>
    <title>Magellan Feedback</title>
</head>
<body>
    <div id="container">
      <?php
    include_once "navi_" . $language . ".php";
    include_once "header.php";
    ?>
      <div id="center">
            <h2>Bugs in Magellan</h2>
            <p>
                Für uns Entwickler sind bei Problemen die
                Fehlermeldungen von Magellan immer ein guter
                Anhaltspunkt. Sie sind in der Datei
                <tt>errors.txt</tt>
                im Magellanverzeichnis zu finden; bitte schickt uns
                diese Fehlermeldungen mit, wenn ihr ein Problem mit
                Magellan habt. Oft kann es zur Reproduktion des Fehlers
                nötig sein, den benutzten CR (oder einen Auszug daraus)
                zu haben. Diese CRs werden selbstverständlich
                vertraulich behandelt und nach der Beseitigung des
                Fehlers gelöscht.
            </p>
            <a id="bugs" name="bugs"></a>
            <p>
                Wo man Fehler melden kann, erfährt man hier: <br />
                <a href="https://magellan2.github.io/bugs">https://magellan2.github.io/bugs</a>
            </p>

            <h3>Featurewünsche = Weiterentwicklung</h3>
            <p>Wir versuchen, die Entwicklung von Magellan an den
                Wünschen der Benutzer zu orientieren. Mantis ist dabei
                eine große Hilfe, weil alle Featurewünsche zentral und
                öffentlichen abrufbar sind.</p>
            <h2>Eressea-Community</h2>
            <p>
                Fragen und Anregung könnt ihr auch gerne an die
                Eresseagemeinde richten. Wo das am besten möglich ist -
                Forum, IRC, Discord - erfahrt ihr auf der <a
                    href="https://www.eressea.de">Eressea-Homepage</a>.
            </p>
        </div>
    </div>
</body>
</html>

