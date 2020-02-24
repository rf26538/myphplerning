<?php
	include("PDOconnDB.php");
	$sql = "INSERT INTO MyGuest(firstname,lastname,email)
		VALUES(:firstname, :lastname, :email)";
	$stmt = $conn->prepare($sql);
	$stmt->bindparam(':firstname', $firstname);
	$stmt->bindparam(':lastname', $lastname);
	$stmt->bindparam(':email', $email);

	$firstname = "rehan";
	$lastname = "fazal";
	$email = "rf1232@gmail.com";
	$stmt->execute();

	$firstname = "lucy";
	$lastname = "raj";
	$email = "rr1233@gmail.com";
	$stmt->execute();

	try
	{
 		echo"statement created"; 
	}
	catch(PDOException $e)
	{
		echo "error".$e->getmessage();
	}
?>