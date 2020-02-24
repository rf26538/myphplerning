<?php
	session_start();
	include('../dbconn.php');
	if(isset($_POST['submit']) && !empty($_FILES["images"]["name"])){
		try{
		    
		    $target_dir = "../images/";
    		$target_file = $target_dir . basename($_FILES["images"]["name"]);
    		$upload = basename($_FILES["images"]["name"]);
    		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		    $id = $_POST['id'];
			$heading = $_POST['heading'];
			$des = $_POST['des'];
			$status = $_POST['status'];
			
			 if(move_uploaded_file($_FILES['images']['tmp_name'], $target_file)) {  
			     
			     $sql = "UPDATE banners SET image='".$upload."', heading='".$heading."', des='".$des."', status='".$status."' WHERE id='$id'";
			    $conn->exec($sql);
			    
			    $_SESSION['message'] = "This data is updated successfully";
			    header("Location:banners.php"); 
			 }else{
			     $_SESSION['message'] = "This data is not updated successfully";
			    header("Location:banners.php"); 
			 }
			
		}catch(PDOExecption $e) {
		   
		$_SESSION['err_msg'] = "something went wrong";
		header("Location:editbanners.php");
		}
	}else if(isset($_POST['submit']) && empty($_FILES["images"]["name"])){
	   try{
	   $id = $_POST['id'];
	    $heading = $_POST['heading'];
		$des = $_POST['des'];
		$status = $_POST['status'];
		$sql = "UPDATE banners SET  heading='".$heading."', des='".$des."', status='".$status."' WHERE id='$id'";
// 		echo $sql;die();
		$conn->exec($sql);
	    $_SESSION['message'] = "This data is updated successfully";
	    header("Location:banners.php"); 
	   }catch(PDOExecption $e) {
		   
		$_SESSION['err_msg'] = "something went wrong";
		header("Location:editbanners.php");
		}
		
	}
?>