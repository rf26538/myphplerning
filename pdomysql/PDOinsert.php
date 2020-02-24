<?php
	$servername = "localhost";
	$username = "root";
	$password = "123456";
	$dbname = "PDOdb";
	try
	{
		$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO MyGuest(firstname,lastname,email)VALUES('jack','shukla','uweu123@gmail.com')";
		$conn->exec($sql);
			echo ("value inserted");
	}
	catch(PDOException $e)
		{
		echo $sql. "<br>".$e->getMessage();
		}
	$conn = NULL;

?>