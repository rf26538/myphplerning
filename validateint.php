<!DOCTYPE html>
<html>
<head>
	<title>validatePHP</title>
</head>
<body>
	<?php
	$int = 200;
	 if (!filter_var($int,FILTER_VALIDATE_INT) ==false) {
	 	echo "initiger is valid";
	 } else {
	 	echo "intiger is not valid";
	 }
	 $int = 0;
	 if (!filter_var($int,FILTER_VALIDATE_INT) == 0)|| (!filter_var($int,FILTER_VALIDATE_INT) == 0 ){
	 	echo "initiger is valid";
	 } else {
	 	echo "intiger is not valid";
	 }
    ?>

</body>
</html>