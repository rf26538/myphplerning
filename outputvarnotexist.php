<?php 
	function customerror($errno,$errstr)
	{
		echo "Eroor:[$errno] $errstr";
	}
	set_error_handler("customerror");
	echo ($test);
 ?>