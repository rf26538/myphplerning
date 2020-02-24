<?php
$servername = "localhost";
	$username = "root";
	$password = "123456";
	$dbname = "crudDB";

	try
	{
		$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM students";
		$stmt = $conn->prepare($sql);
	
		$stmt->execute();

		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

		foreach($stmt->fetchAll()) as $k =>$v)  {
			print_r($v);
		}
	}catch(PDOException $e)
	{
		echo "error".$e->getMessage();
	}
?>