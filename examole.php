<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json;charset=utf-8');
$myfile = "value.txt" ;
$fileHandle = fopen($myfile,'r');
$thedata = fread($fileHandle,100);
  echo($thedata);
$a = $thedata['temp']
  echo($a)
// $output= '{
// "value": [
// {"text": "This Form OPDEV API"},
// {"text": "Connection Success !"}
// ]
// }';
// print_r($output);
?>
