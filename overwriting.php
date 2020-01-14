<?php 
	$myfile = fopen("file:///var/www/html/php.txt","a") or die('unable to open');
	$txt = "harish\n";
	fwrite($myfile,$txt);
	$txt = "neo\n";
	fwrite($myfile,$txt);
	fclose($myfile);
 ?>