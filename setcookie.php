<!DOCTYPE html>
<html>
<head>
	<title>set cookie</title>
</head>
<body>
	<?php 
		if (isset($_COOKIE[$cookie_name]))
		 {
			echo "cookie named".$cookie_name."is not set";
		 } 
		else 
		 {
			echo "cookie".$cookie_name."is set";
			$_COKIE[$cookie_name];
		 }
		
	 ?>

</body>
</html>