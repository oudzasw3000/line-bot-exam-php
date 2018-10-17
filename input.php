<?php
$myfile = "value.txt"
$fileHandle = fopen($myfile,'a')
$a = ($_POST);
$b = ($a['aa'])
fwrite($fileHandle, $a)
  fclose($fileHandle)
?> 
