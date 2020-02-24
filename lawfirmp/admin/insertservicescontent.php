<?php
	session_start();
	include('../dbconn.php');

	if(isset($_POST['submit'])){
		try{
			$servicesid = $_POST['services_id'];
			$menuname = $_POST['menu_name'];
			$menulink = $_POST['menu_link'];
			$status = $_POST['status'];
			$sql = "INSERT INTO services_content(services_id,heading,des,status) VALUES('$servicesid','$menuname','$menulink','$status')";
			$conn->exec($sql);
			$_SESSION['message'] = "This data is created successfully";
			header("Location:servicespagecontent.php?id=".$servicesid); 

		}catch(PDOExecption $e) {
		$_SESSION['err_msg'] = "something went wrong";
		header("Location:addservicescontent.php");
		}
	}
?>