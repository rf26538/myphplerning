<?php
	include("createcoon.php");
	
	$sql = "INSERT INTO students(firstname,lastname,email,gender)VALUES('rehan','fazal','srfrs@gmail.com','male')";
	try
	{
		$conn->exec($sql);
		echo "inserted!<br>";
	}
		catch(PDOExecption $e)
	{
		echo "error".$e->getMessage();
	}
?>