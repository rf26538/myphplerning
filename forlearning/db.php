<?php
$servername = "localhost";
$username = "root";
$password = "123456";

try{
	$conn = new PDO("mysql:host=$servername", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "CREATE DATABASE crudDB";

	$conn->exec($sql);
		echo "database created successfully!<br>";
}catch(PDOExecption $e){
	echo $Sql."<br>".$e->getMessage();
}
// $conn = null;
?>