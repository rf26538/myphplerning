<!DOCTYPE html>
<html>
<head>
	<title>within the range</title>
</head>
<body>
</body>
 <?php
	$int = 155;
	$min = 1;
	$max = 190;
	if (!filter_var($int,FILTER_VALIDATE_INT,array("options"=>array("min_range"=>$min,"max_range"=>$max))) == false) {
		echo "value is in within the range";
	} else {
		echo "value is not within the range";
	}
 ?>
</body>
</html>