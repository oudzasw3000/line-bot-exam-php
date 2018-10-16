<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json;charset=utf-8');
$output= '{
"messages": [
{"text": "This Form OPDEV API"},
{"text": "Connection Success !"}
]
}';
print_r($output);
?>
