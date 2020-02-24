<?php
	session_start();
	include('../dbconn.php');

	if(isset($_POST['submit'])){
		try{
			$menuname = $_POST['main_menu'];
			$submenuname = $_POST['sub_menu_name'];
			$submenulink = $_POST['sub_menu_link'];
			$status = $_POST['status'];
			$sql = "INSERT INTO sub_menu(sub_menu_name,sub_menu_link,menu_id,status) VALUES('$submenuname','$submenulink','$menuname','$status')";
			$conn->exec($sql);
			$_SESSION['message'] = "This data is created successfully";
			header("Location:submenu.php"); 

		}catch(PDOExecption $e) {
		$_SESSION['err_msg'] = "something went wrong";
		header("Location:addmenu.php");
		}
	}
?>