<?php

$NIGHTLY_BUILD = "-?-";
$LATEST_VERSION = "-?-";

$RELEASE = "-?-";
$RELEASE_VERSION = "-?-";


if(file_exists("nightly-build/VERSION")) {
  $stat = @stat("nightly-build/VERSION");
  $NIGHTLY_BUILD = date("d.m.Y H:i:s P",$stat["mtime"]);
}

if (file_exists("nightly-build/VERSION")) {
  $lines = file("nightly-build/VERSION");
  foreach ($lines as $lineNumber => $line) {
    $line = trim($line);
    if (!(substr($line,0,1) == "#")) {
      $LATEST_VERSION = substr($line,8);
    } 
  }
}

if(file_exists("release/VERSION")) {
  $stat = @stat("release/VERSION");
  $RELEASE = date("d.m.Y H:i:s P",$stat["mtime"]);
}

if (file_exists("release/VERSION")) {
  $lines = file("release/VERSION");
  foreach ($lines as $lineNumber => $line) {
    $line = trim($line);
    if (!(substr($line,0,1) == "#")) {
      $RELEASE_VERSION = substr($line,8);
    } 
  }
}

?>