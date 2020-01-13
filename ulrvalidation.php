<!DOCTYPE html>
<html>
<head>
	<title>url vsalidation</title>
</head>
<body>
	<?php
	$url = "http://www.validateurl.com";
	$url = filter_var($url,FILTER_SANITIZE_URL);
	if (!filter_var($url,FILTER_VALIDATE_URL) == false) {
		echo "$url"."<br>"."the url is valid";
	} else {
		echo "$url"."<br>"."the url is not valid";
	}
	  ?>
</body>
</html>