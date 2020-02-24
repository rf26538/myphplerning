<?php
	include ("PDOconnDB.php"); 
	$conn->exec("INSERT INTO MyGuest(firstname,lastname,email)VALUES('farid','alam','rex123@gmail.com')");

	$conn->exec("INSERT INTO MyGuest(firstname,lastname,email)VALUES('raj','kumar','rex12@gmail.com')");

	$conn->exec("INSERT INTO MyGuest(firstname,lastname,email)VALUES('chandan','raj','rdx112@gmail.com')");
	try
	{
		$conn->beginTransaction();
		$conn->commit();
		echo "inseted at querry";
	}
	catch(PDOException $e)
	{
		$conn->rollback();
		echo  "error".$e->getMessage();
	}
?>