<?php
	session_start();
	include ("../dbconn.php");
	if(isset($_POST["submit"])){
		try
		{
			$menuname = $_POST['menu_name'];
			$menulink = $_POST['menu_link'];
			$status = $_POST['status'];
			$id = $_POST['hidden'];
			$sql = "UPDATE menu SET menu_name='$menuname',menu_link='$menulink',status='$status' WHERE id= '$id'";
			$stmt = $conn->prepare($sql);
			$stmt->execute();

			$_SESSION['message'] = "This data is updated successfully";
			header("Location:menu.php");
			
		} catch (PDOException $e){
			$_SESSION['msg_err'] = "Something went wrong";
			header("Location:editmenu.php");
			}
	}
?>