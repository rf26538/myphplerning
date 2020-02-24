<?php
	$servername = "localhost";
	$username = "root";
	$password= "123456";
	$dbname = "contact_us";

	try
	{
		$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// echo "connection ok!";
	}
		catch(PDOExeception $e)
	{
		echo "error".$e->getMessage();
	}
?>