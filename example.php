<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json;charset=utf-8');
$data = file_get_contents("value.txt"); 
// $a = ($data['temp']);
$i = 0 ;
$a ="";
$b ="";
// $convert = explode("\n", $data); //create array separate by new line
for ($i=21;$i<=25;$i++){
  $a = $a."".$data[$i];
}
// print_r($a);
for ($i=41;$i<=45;$i++){
  $b = $b."".$data[$i];
}
// print_r("\n".$b);

// $myfile = "value.txt" ;
// $fileHandle = fopen($myfile,'r+');
// $thedata = fread($fileHandle,100);
//   echo($thedata);
// $a = ($thedata[1]);
// $b = $a['array']
// $a = $thedata['temp'];
//   print_r($a);
$output= '{
"value": [
{"temp": "".$a},
{"hum": "".$b}
]
}';
print_r($output);
?>
