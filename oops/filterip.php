<!DOCTYPE html>
<html>
<head>
	<title>filterip</title>
</head>
<body>
	<?php
		$ip = "127.0.0.1";
		if (!filter_var($ip,FILTER_VALIDATE_IP) == false) {
		echo "$ip"." is valid ip";
		} else {
			echo "$ip"."is not valid ip";
		}
		
	?>
</body>
</html>