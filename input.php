<?php
require "value.txt" ;
$myfile = "value.txt";
$fileHandle = fopen($myfile,'w+')or die("can't open file");
$a = ($_POST["hum"]);
$b = ($_POST["temp"]);
//print_r($a);
// print_r($b);
 $output= '{
"value": [
{"temp": "'.$b.'"},
{"hum": "'.$a.'"}
]
}';
print_r($output);
//fwrite($fileHandle, $a);
fwrite($fileHandle, print_r($output, true));
  fclose($fileHandle);
?> 
