<?php
session_start();
	// include("session.php");
	include('../dbconn.php');

	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM admin WHERE email='".$email."'AND password='".$password."' AND status='1'";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
    	$stmt->setFetchMode(PDO::FETCH_ASSOC);
    	$result = $stmt->fetchAll();
    	// print_r($result);
    	// die();
      	$count = $stmt->rowCount();
      	
		if($count > 0) {
			$_SESSION["admin_id"] = $result[0]['id'];
			$_SESSION["admin_name"] = $result[0]['name'];
			$_SESSION["admin_email"] = $result[0]['email'];
			$_SESSION["admin_logged_in"] = true;
			$_SESSION["success"] = "loggedIn successfully";
			header("location:dashboard.php");
		} else {
			$_SESSION['err_msg'] = 'something went wrong';
			header("location:login.php");
		}
	}
?>