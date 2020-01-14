<?php
//starting session it shou;ld be above html tag
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>session</title>
</head>
<body>
	<?php
//setting the session values
		$_SESSION["fvrtcolor"] = "black";
		$_SESSION["fvrtcar"] = "BMW";
//changes values of session vsriable
		$_SESSION["fvrtcolor"] = "red";
// another vway to show session variable
		print_r($_SESSION["fvrtcolor"]);
			echo "<br>";
		 echo 'session conected';
		 	echo "<br>";
		 echo $_SESSION["fvrtcolor"];
		 	echo "<br>";
		 echo $_SESSION["fvrtcar"];
		 	echo "<br>";
	?>

</body>
</html>