<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "myDB";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("not connected to db".$conn->connect_error);
}

$sql = "INSERT INTO MyGuest(firstname,lastname,email)
		VALUES('VIKASH','kumar','VK143@gmail.com')";
	if ($conn->query($sql))
	{
		echo "data inserted successfully";
	} else {
		echo "data not inserted";
	}
	$conn->close();
	
?>