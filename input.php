<?php
require "value.txt" ;
$myfile = "value.txt";
$fileHandle = fopen($myfile,'r+')or die("can't open file");
$a = ($_POST);
$b = ($a['aa']);
//fwrite($fileHandle, $a);
fwrite($fileHandle, var_export($a, true));
  fclose($fileHandle);
?> 
