<?php
include('../dbconn.php');
session_start();
if (isset($_GET['id'])) {
	try{
		$id = $_GET['id'];
		$sql = "DELETE FROM services WHERE id=$id";
			$conn->exec($sql);
			$_SESSION['message'] = "This data is deleted successfully";
			header("Location:services.php");
		}catch(PDOException $e){
			// echo "error!".$e->getMessage();
			$_SESSION['message'] = "Something went wrong";
			header("Location:services.php");
		}
	}
?>