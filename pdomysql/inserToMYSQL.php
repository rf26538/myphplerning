<?php
	$servername = "localhost";
	$username = "root";
	$password = "123456";
	$dbname = "myDB";
	
	$conn = new mysqli($servername,$username,$password,$dbname);
	if ($conn->connect_error) {
		die("connection failed:" . $conn->connect_error);
	}
	$sql = "INSERT INTO MyGuest (firstname,lastname,email)
		VALUES ('rehan','fazal','rf26538@gmail.com')";

	if ($conn->query($sql) === TRUE){
		echo "data inserted seccessfully";
	}else{
		echo "error:" .$sql . "<br>". $conn->error();
	}
	$conn->close();
?>