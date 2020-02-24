<?php
	session_start();
	include ("../dbconn.php");
	if(isset($_POST["submit"])){
		try
		{
			$submenuname = $_POST['sub_menu_name'];
			$submenulink = $_POST['sub_menu_link'];
			$status = $_POST['status'];
			$id = $_POST['id'];
			$sql = "UPDATE sub_menu SET sub_menu_name='$submenuname',sub_menu_link='$submenulink',status='$status' WHERE id='$id'";
			$stmt = $conn->prepare($sql);
			$stmt->execute();

			$_SESSION['message'] = "This data is updated successfully";
			header("Location:submenu.php");
			
		} catch (PDOException $e){
			$_SESSION['msg_err'] = "Something went wrong";
			header("Location:editsubmenu.php");
			}
	}
?>