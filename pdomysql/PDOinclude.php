<?php
	include ("PDOconnDB.php");

	$sql = "INSERT INTO MyGuest(firstname,lastname,email)VALUES('amir','ali','some123@gamil.com')";
	try
	{
		$conn->exec($sql);
		echo "inserted";
	}
	catch(PDOException $e)
	{
		echo "failed to inter".$e->getmessage(); 
	}
?>