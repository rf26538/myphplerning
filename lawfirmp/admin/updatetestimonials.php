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
		    $post = $_POST['post'];
			$heading = $_POST['heading'];
			$des = $_POST['des'];
			$status = $_POST['status'];
			
			 if(move_uploaded_file($_FILES['images']['tmp_name'], $target_file)) {  
			     
			     $sql = "UPDATE testimonials SET image='".$upload."', name='".$heading."',post='".$post."', des='".$des."', status='".$status."' WHERE id='$id'";
			    $conn->exec($sql);
			    
			    $_SESSION['message'] = "This data is updated successfully";
			    header("Location:testimonials.php"); 
			 }else{
			     $_SESSION['message'] = "This data is not updated successfully";
			    header("Location:testimonials.php"); 
			 }
			
		}catch(PDOExecption $e) {
		   
		$_SESSION['err_msg'] = "something went wrong";
		header("Location:edittestimonials.php");
		}
	}else if(isset($_POST['submit']) && empty($_FILES["images"]["name"])){
	   try{
	    $id = $_POST['id'];
	    $post = $_POST['post'];
	    $heading = $_POST['heading'];
		$des = $_POST['des'];
		$status = $_POST['status'];
		$sql = "UPDATE testimonials SET  name='".$heading."', post='".$post."', des='".$des."', status='".$status."' WHERE id='$id'";
		$conn->exec($sql);
	    $_SESSION['message'] = "This data is updated successfully";
	    header("Location:testimonials.php"); 
	   }catch(PDOExecption $e) {
		   
		$_SESSION['err_msg'] = "something went wrong";
		header("Location:edittestimonials.php");
		}
		
	}
?>