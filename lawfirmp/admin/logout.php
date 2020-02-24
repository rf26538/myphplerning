<?php
	session_start();  
	session_unset($_SESSION["admin_id"]);
	session_unset($_SESSION["admin_name"]);
	session_unset($_SESSION["admin_email"]);
	session_unset($_SESSION["admin_logged_in"]);
	if(session_destroy()){
		session_start();
		$_SESSION["success"] = "logout successfully";
 	 header("location:index.php");
 }  
?>