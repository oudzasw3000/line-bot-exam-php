<?php

// read the incoming POST body (the JSON)
$input = file_get_contents('php://input');

// decode/unserialize it back into a PHP data structure
$data = json_decode($input);

// $data is now the same thing it was line 1 of your given sample code
