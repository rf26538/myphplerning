<?php
session_start();
include('../dbconn.php');
$id = $_GET['id'];
$sql = "DELETE FROM banners WHERE id =$id";
$conn->exec($sql);
$_SESSION['message'] = "This data is deleted successfully";
header("Location:banners.php"); 
?>