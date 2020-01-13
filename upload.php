<?php
	if(isset($_POST["upload"]) == "submit"){
		$diruploads = "uploads/";
		$uploadOk = 1;
		$dir = $diruploads.base_url($_FILES["filetoupload"]["name"]);
		$filextention = strtolower(pathinfo($dir,PATHINFO_EXTENSION));
		$check = getimagesize($_FILES["filetoupload"]["temp_name"]);
			if ($check !== false) {
				echo "it is an image ";
			$check["mime"].".";
			$uploadOk = 1;
			}
			else
			{
				echo "it is not an image";
				$uploadOk = 0;
			}
	}
?>