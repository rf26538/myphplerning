<?php 
	$myfile = fopen("file:///var/www/html/php.txt","w+") or die('unable to open');
	 $txt = "jhon eho\n";
	 fwrite($myfile,$txt);
	 $txt = "jane eho\n";
	 fwrite($myfile,$txt);
	 fclose($myfile);
 ?>