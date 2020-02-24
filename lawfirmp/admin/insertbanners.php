<?php
	session_start();
	include('../dbconn.php');

	if(isset($_POST['submit']) && !empty($_FILES["images"]["name"])){
		try{
		    
		    $target_dir = "../images/";
    		$target_file = $target_dir . basename($_FILES["images"]["name"]);
    		$upload = basename($_FILES["images"]["name"]);
    		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		    
			$heading = $_POST['heading'];
			$des = $_POST['des'];
			$status = $_POST['status'];
			
			 if(move_uploaded_file($_FILES['images']['tmp_name'], $target_file)) {  
			     $sql = "INSERT INTO banners(image,heading,des,status) VALUES('$upload','$heading','$des','$status')";
			     //echo $sql; die();
			    $conn->exec($sql);
			    
			    $_SESSION['message'] = "This data is created successfully";
			    header("Location:banners.php"); 
			 }else{
			     //echo "error";
			     $_SESSION['err_msg'] = "something went wrong";
		        header("Location:addbanners.php");
			 }
			

		}catch(PDOExecption $e) {
		   
		$_SESSION['err_msg'] = "something went wrong";
		header("Location:addbanners.php");
		}
	}
?>