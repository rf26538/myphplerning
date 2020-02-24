<?php
include('../dbconn.php');
session_start();
if (isset($_GET['id'])) {
	try{
		$id = $_GET['id'];
		$sql = "DELETE FROM team WHERE id=$id";
			$conn->exec($sql);
			$_SESSION['message'] = "team is deleted successfully";
			header("Location:aboutus.php");
		}catch(PDOException $e){
			// echo "error!".$e->getMessage();
			$_SESSION['message'] = "Something went wrong";
			header("Location:aboutus.php");
		}
	}
?>