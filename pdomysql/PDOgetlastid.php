<?php
	$servername = "localhost";
	$username = "root";
	$password = "123456";
	$dbname = "PDOdb";
	try
	{
		$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO MyGuest(firstname,lastname,email)VALUES('rahul','kumar','someonexample@gmail.com')";
		$conn->exec($sql);
		$last_id = $conn->lastInsertId();
		echo "last eliment id".$last_id;
	}
	catch(PDOException $e)
	{
		echo $sql."<br>".$e->getMessage();
	}
	$conn = null;
?>