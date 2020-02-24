<?php
//error handler function
 function customError ($errno,$errstr){
 	echo "Error:[$errno]$errstr";
 	echo "ending script";
 	die();
 }
 // set error handler
 	set_error_handler("customError",E_USER_WARNING);
 // triger error
 	$test = 2;
 	if ($test>=1) {
 		trigger_error("value must be 1 or below",E_USER_WARNING);	
 	}
?>