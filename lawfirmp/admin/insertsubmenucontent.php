<?php
	session_start();
	include('../dbconn.php');

	if(isset($_POST['submit'])){
		try{
			$submenuid = $_POST['sub_menu_id'];
			$heading = $_POST['heading'];
			$des = $_POST['des'];
			$status = $_POST['status'];
			$sql = "INSERT INTO sub_menu_content(sub_menu_id,heading,des,status) VALUES('$submenuid','$heading','$des','$status')";
			$conn->exec($sql);
			$_SESSION['message'] = "This data is created successfully";
			header("Location:submenupagecontent.php?id=".$submenuid); 

		}catch(PDOExecption $e) {
		$_SESSION['err_msg'] = "something went wrong";
		header("Location:addsubmenucontent.php");
		}
	}
?>