<?php
	$servername = "localhost";
	$username = "root";
	$password = "123456";
	$conn = new mysqli($servername,$username,$password,"learnphp");
	if ($conn->connect_error) {
		die("Connection failed".$conn->connect_error);
	} else {
		echo"connected successfully";
	}
?>