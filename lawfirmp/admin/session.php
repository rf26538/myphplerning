<?php
	session_start();
	include("../dbconn.php");
	$admin_id = $_SESSION["admin_id"];

	$sql="SELECT id FROM admin WHERE id='$admin_id'";
	$stmt =$conn->prepare($sql);
	$stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
	$result = $stmt->fetchAll();
	$login_session =$result['id'];
	if(!isset($login_session)){
	header('Location: index.php');
	}
?>