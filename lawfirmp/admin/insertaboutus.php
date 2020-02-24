<?php
	session_start();
	include('../dbconn.php');

	if(isset($_POST['submit'])){
		try{
			$menuname = $_POST['menu_name'];
			$menulink = $_POST['menu_link'];
			$status = $_POST['status'];
			$sql = "INSERT INTO aboutus(heading,des,status) VALUES('$menuname','$menulink','$status')";
			$conn->exec($sql);
			$_SESSION['message'] = "This data is created successfully";
			header("Location:aboutus.php"); 

		}catch(PDOExecption $e) {
		$_SESSION['err_msg'] = "something went wrong";
		header("Location:addaboutus.php");
		}
	}
?>