<!DOCTYPE html>
<html>
<head>
	<title>validate$sAnItizeemail</title>
</head>
<body>
</body>
<?php
	$email = "ramesh123.xyz@example.com";
	$email = filter_var($email,FILTER_SANITIZE_EMAIL);
	if (!filter_var($email,FILTER_VALIDATE_EMAIL) == false) {
		echo "valide email"."<br>"."$email";
	} else {
		echo "not avalid email"."<br>"."$email";
	}
	
 ?>

</body>
</html>