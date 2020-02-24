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
			$post = $_POST['post'];
			$des = $_POST['des'];
			$status = $_POST['status'];
			$fb = $_POST['fb'];
			$insta = $_POST['insta'];
			 if(move_uploaded_file($_FILES['images']['tmp_name'], $target_file)) {  
			     $sql = "INSERT INTO team(image,name,post,des,fb_link,insta_link,status) VALUES('$upload','$heading','$post','$des','$fb','$insta','$status')";
			     //echo $sql; die();
			    $conn->exec($sql);
			    
			    $_SESSION['message'] = "This data is created successfully";
			    header("Location:aboutus.php"); 
			 }else{
			     //echo "error";
			     $_SESSION['err_msg'] = "something went wrong";
		        header("Location:addtteam.php");
			 }
			

		}catch(PDOExecption $e) {
		   
		$_SESSION['err_msg'] = "something went wrong";
		header("Location:addteteam.php");
		}
	}
?>