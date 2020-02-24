<!DOCTYPE html>
<html>
<head>
	<title>validateipv6</title>
</head>
<body>
	</body>
	<?php
	$ip = "2001:0db8:85a3:a34b:8a2e:0370:7334";
	if (filter_var($ip,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6) == false) {
		echo "$ip"."<br>"."is a valid ipv6 protocol";
	} else {
		echo "$ip"."<br>"."is not a valid ipv6 protocol";
	}
	 ?>

</body>
</html>