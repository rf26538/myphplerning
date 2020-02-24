<!DOCTYPE html>
<html>
<head>
	<title>filter vaeriable</title>
</head>
<body>
	<?php
	$srt = "<h1> hellow world</h1>";
	$newstr = filter_var($str,FILTER_SANITIZE_STRING);
	echo $newstr;
?>

</body>
</html>