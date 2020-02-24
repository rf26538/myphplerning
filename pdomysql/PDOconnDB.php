<?php
$servername = "localhost";
	$username = "root";
	$password = "123456";
	$dbname = "crudDB";
	try{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "connection ok!";
		}
				catch(PDOException $e)
			{
				echo  "error".$e->getmessage();
			}
	// $conn = null;
?>