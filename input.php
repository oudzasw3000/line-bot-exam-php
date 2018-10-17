<?php
require "value.txt" ;
$myfile = "value.txt";
$fileHandle = fopen($myfile,'w')or die("can't open file");
$a = ($_POST);
$b = ($a['aa']);
fwrite($fileHandle, "12");
  fclose($fileHandle);
?> 
