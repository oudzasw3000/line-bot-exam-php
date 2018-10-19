<?php
require "value.txt" ;
$myfile = "value.txt";
$fileHandle = fopen($myfile,'r+')or die("can't open file");
$a = ($_POST);
$b = ($a[0]);
print_r($b);
//   $output= '{
// "value": [
// {"temp": "'.$a.'"},
// {"hum": "'.$b.'"}
// ]
// }'

//fwrite($fileHandle, $a);
fwrite($fileHandle, var_export(json_encode($a), true));
  fclose($fileHandle);
?> 
