<?php
 function customError ($errno,$errstr){
 	echo "Error:[$errno]$errstr";
 	 echo "<br>";
 	echo "webmaster has been notified";
 // error log
 	error_log("Error: [$errno]$errstr",1,"some@emample.com","From:wewbmaster@example.com");
 }
 	set_error_handler("customError",E_USER_WARNING);
 	$test = 2;
 	if ($test>=1) {
 		trigger_error("value must be 1 or below",E_USER_WARNING);	
 	}
?>