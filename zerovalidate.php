<!DOCTYPE html>
<html>
<head>
	<title>zeroasinteger</title>
</head>
<body>
<?php
	$int = 0;
	 if (filter_var($int,FILTER_VALIDATE_INT) == false || filter_var($int,FILTER_VALIDATE_INT) == 0 ){
	 	echo "integer is valid";
	} else {
	 	echo "integer is not valid";
  }
?>
</body>
</html>