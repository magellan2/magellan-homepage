      <div id="left" style="white-space:nowrap;">
        <p>
<?php
$msie='/msie\s(5\.[5-9]|[6]\.[0-9]*).*(win)/i';
if( !isset($_SERVER['HTTP_USER_AGENT']) || !preg_match($msie,$_SERVER['HTTP_USER_AGENT']) || preg_match('/opera/i',$_SERVER['HTTP_USER_AGENT'])) {
?>
          <a href="." onfocus="if(this.blur()){this.blur();}"><img src="images/logo24.png" alt="Magellan-Logo" border="0"/></a>
<?php } else { ?>
          <a href="." onfocus="if(this.blur()){this.blur();}"><img src="images/logo8.png" alt="Magellan-Logo" border="0"/></a>
<?php } ?>
        </p>
        <p style="text-align:left">
<?php if($language == "en") { ?>
          [EN]
          <a href="index_de.php">[DE]</a>
<?php } else { ?>
          <a href="index_en.php">[EN]</a>
          [DE]
<?php } ?>
        </p>
        <p>
          <a href="index_de.php">Home</a>
        </p>
        <p>
          <a href="download_de.php">Download</a><br/>
          <a class="sublink" href="download_de.php#magellan2">Magellan 2.x</a>&nbsp;&middot;&nbsp;&nbsp;<br/>
          <a class="sublink" href="download_de.php#magellan1">Magellan 1.x</a>&nbsp;&middot;&nbsp;&nbsp;<br/>
        </p>
        <p>
          <a href="feedback_de.php">Feedback &amp; Support</a>
        </p>
        <p>
          <a href="faq_de.php">F.A.Q.</a>
        </p>
        <p>
          <a href="help_de.php">Dokumentation</a>
        </p>
        <p>
          <a href="plugins_de.php">Plugins</a><br/>
          <a class="sublink" href="plugins_alliance_de.php">Alliance Plugin</a>&nbsp;&middot;&nbsp;&nbsp;<br/>
          <a class="sublink" href="plugins_extcmds_de.php">ExtCmds Plugin</a>&nbsp;&middot;&nbsp;&nbsp;<br/>
          <a class="sublink" href="plugins_mapcleaner_de.php">MapCleaner Plugin</a>&nbsp;&middot;&nbsp;&nbsp;<br/>
          <a class="sublink" href="plugins_mapedit_de.php">MapEdit Plugin</a>&nbsp;&middot;&nbsp;&nbsp;<br/>
          <a class="sublink" href="plugins_memorywatch_de.php">MemWatch Plugin</a>&nbsp;&middot;&nbsp;&nbsp;<br/>
          <a class="sublink" href="plugins_statistics_de.php">Statistics Plugin</a>&nbsp;&middot;&nbsp;&nbsp;<br/>
          <a class="sublink" href="plugins_teacher_de.php">Teacher Plugin</a>&nbsp;&middot;&nbsp;&nbsp;<br/>
        </p>
        <p>
          <a href="tools_de.php">Tools</a><br/>
          <a class="sublink" href="tools_consolemerger_de.php">Console Merger</a>&nbsp;&middot;&nbsp;&nbsp;<br/>
        </p>
        <p>
          <a href="javadoc/">JavaDoc</a>
        </p>
        <p>
          <a class="externalLink" href="http://magellan-client.sourceforge.net/mantis/">Fehler melden</a>
        </p>
        <p>
          <a class="externalLink" href="http://sourceforge.net/projects/magellan-client">SourceForge</a>
        </p>
      </div>
