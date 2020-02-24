<?php
	include ("dbconn.php");

	if (isset($_POST["send"]))
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$subj = $_POST['subject'];
		$message = $_POST['message'];

		try{
			$sql = "INSERT INTO contact_us(fname,lname,email,subject,message) VALUES ('$fname','$lname','$email','$subj','$message')";
			$conn->exec($sql);
		} catch(PDOExecption $e) {
			echo "error" .$e->getmessage();
		}
	}
?>