<?php
require "value.txt" ;
$myfile = "value.txt";
$fileHandle = fopen($myfile,'');
$a = ($_POST);
$b = ($a['aa']);
fwrite($fileHandle, $a);
  fclose($fileHandle);
?> 
