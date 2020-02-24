<?php
// it is doing insert
	session_start();
	include ("conn.php");

	if(isset($_POST["submit"]))
	{
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];
			$gender = $_POST['gender'];
			$image = $_FILES['fileToUpload']['name'];
			// $uploadok = 1;
				//FILE UPLOAD
			$target_dir = "../uploads/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				// cheak img file type
			// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			
			// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			// 	&& $imageFileType != "gif" ){
   //  		$error = "does not accept JPEG/JPG/PNG/GIF extension";
			// $uploadok = 0;
			// }
   //  		// cheak file size
		 //    	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		 //    	if ($_FILES["fileToUpload"]["size"] > 5000000) 
   //  		{
   //  			$error = "image size should not be more then 5MB";
			// 	$uploadok = 0;
			// }
			// // if all ok upload
			// if ($uploadok = 1) {
			// 	# code...
			// }
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
			try
			{
				$sql = "INSERT INTO students(firstname,lastname,email,gender,image) VALUES('$firstname','$lastname','$email','$gender','$image')";
				$conn->exec($sql);
				$_SESSION['message'] = "This data is created successfully";
				header("Location:index.php");
			}catch(PDOException $e){
			// echo "error!".$e->getMessage();
			$_SESSION['message'] = "Something went wrong";
			header("Location:index.php");
		}
	}
?>