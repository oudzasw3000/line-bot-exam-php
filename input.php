<?php
require "value.txt" ;
$myfile = "value.txt";
$fileHandle = fopen($myfile,'a')or die("can't open file");;
$a = ($_POST);
$b = ($a['aa']);
fwrite($fileHandle, $a);
  fclose($fileHandle);
?> 
