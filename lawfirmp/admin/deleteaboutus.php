<?php
include('../dbconn.php');
session_start();
if (isset($_GET['id'])) {
	try{
		$id = $_GET['id'];
		$sql = "DELETE FROM aboutus WHERE id=$id";
			$conn->exec($sql);
			$_SESSION['message'] = "This data is deleted successfully";
			header("Location:aboutus.php");
		}catch(PDOException $e){
			// echo "error!".$e->getMessage();
			$_SESSION['message'] = "Something went wrong";
			header("Location:aboutus.php");
		}
	}
?>