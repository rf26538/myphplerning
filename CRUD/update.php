<?php
// it is doing insert
	include ("conn.php");
			//FILE UPLOAD
		// 	$target_dir = "../uploads/";
		// 	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		// 	// cheak img file type
		// 	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// 	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		// 	&& $imageFileType != "gif" ) 
		// {
  //   		$_SESSION['message'] = "JPG/PNG/JPEG/GIF are allowed";
		// 	header("Location:index.php");
  //   	}
	 //    		// cheak file size
	 //    	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	 //    	if ($_FILES["fileToUpload"]["size"] > 5000) 
  //   	{
  //   		$_SESSION['message'] = "ACCEPT files not more then 5mb";
		// 	header("Location:index.php");
		// }
		// 	// if all ok upload
		// 	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
		// 	try
		// {
	    	if(isset($_POST["update"])){
		try
		{

			$id = $_POST['id'];
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];
			$gender = $_POST['gender'];
			$image = $_FILES['fileToUpload']['name'];
			$target_dir = "../uploads/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

			if ($image == "") {
				$image = $_POST["pre_fileToUpload"];
			}

			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

			$sql = "UPDATE students SET firstname='$firstname',lastname='$lastname',email='$email',gender='$gender'
			,image='$image' WHERE id= '$id'";

			$stmt = $conn->prepare($sql);
			$stmt->execute();

			$_SESSION['message'] = "This data is updated successfully";
			header("Location:index.php");
			
		} catch (PDOException $e){
			 // echo "error!".$e->getMessage();
			$_SESSION['message'] = "Something went wrong";
			header("Location:index.php");
			}
	}
?>