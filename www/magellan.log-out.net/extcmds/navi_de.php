      <div id="left" style="white-space:nowrap;">
        <p>
<?php
$msie='/msie\s(5\.[5-9]|[6]\.[0-9]*).*(win)/i';
if( !isset($_SERVER['HTTP_USER_AGENT']) || !preg_match($msie,$_SERVER['HTTP_USER_AGENT']) || preg_match('/opera/i',$_SERVER['HTTP_USER_AGENT'])) {
?>
          <a href="." onfocus="if(this.blur()){this.blur();}"><img src="../images/logo24.png" alt="Magellan-Logo" border="0"/></a>
<?php } else { ?>
          <a href="." onfocus="if(this.blur()){this.blur();}"><img src="../images/logo8.png" alt="Magellan-Logo" border="0"/></a>
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
      </div>
