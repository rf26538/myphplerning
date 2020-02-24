<?php
	include("createcoon.php");
	
	$sql = "CREATE TABLE students(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    gender VARCHAR(20)
    )";
    try
    {
    	$conn->exec($sql);
    	echo "table created successfully!";
    }
    catch(PDOExecption $e)
    {
    	echo "error".$e->getMessage();
    }
?>