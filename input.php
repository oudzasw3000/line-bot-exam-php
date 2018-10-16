<?php

if(isset($_POST["pro"])) {

	foreach ($_POST["pro"] as $lang) {
		echo"$lang<br>";
	}
}

?> 
