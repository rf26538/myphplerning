	<?php
	session_start();
	include('../dbconn.php');

	if(isset($_POST['submit'])){
		try{
			$menuname = $_POST['menu_name'];
			$menulink = $_POST['menu_link'];
			$iconclass = $_POST['icon_class'];
			$status = $_POST['status'];
			$sql = "INSERT INTO services(name,link,icon_class,status) VALUES('$menuname','$menulink','$iconclass','$status')";
			$conn->exec($sql);
			$_SESSION['message'] = "This data is created successfully";
			header("Location:services.php"); 

		}catch(PDOExecption $e) {
		$_SESSION['err_msg'] = "something went wrong";
		header("Location:addservices.php");
		}
	}
?>