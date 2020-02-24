<?php

	$servername = "localhost";
	$username = "root";
	$password = "123456";
	$dbname = "PDOdb";

	try
	{
		$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
		if(isset($_POST['submit']))
		{
			if (($_POST['fullname'] == "")||($_POST['class'] == "")||($_POST['email'] == "")||($_POST['rollnumber'] == "")||($_POST['gender']== ""))
			{
				echo "fill all";
			}
			else{
				$fullname = $_POST['fullname'];
				$class = $_POST['class'];
				$email = $_POST['email'];
				$rollnumber = $_POST['rollnumber'];
				$gender = $_POST['gender'];

				$sql = "INSERT INTO myHt(fullname, class, email, rollnumber, gender) VALUES ('$fullname', '$class', '$email', '$rollnumber', '$gender')";

				$conn->exec($sql);
				echo "value inserted to db";
			}
		}
	}catch(PDOException $e){
		echo "error" . $e->getMessage();
	}
		$conn = NULL;
?>