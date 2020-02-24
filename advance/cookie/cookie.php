<?php
	$cookie_name = "HEX";
	$cookie_value = 'ramesh bhai';
	echo setcookie($cookie_name,$cookie_value,time() + (86400 * 30),"/");
?>