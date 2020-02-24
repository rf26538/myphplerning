<?php
$servername = "localhost";
	$username = "root";
	$password = "123456";
	try{
			$conn = new PDO("mysql:host=$servername",$username,$password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "CREATE DATABASE PDOdb";
			$conn->exec($sql);
			echo "database created successfully";
	}	
			catch(PDOException $e)
			{
				echo "conenection failed".$e->getmessage();
			}
	$conn = null;
?>