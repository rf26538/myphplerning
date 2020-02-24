<?php
//funtion for exceptio
	function checkNum($number){
		if ($number>1) {
		 throw new Exception ("value must be 1 or below");
		}
		return true;
	}
// trigger exception in "try"block
	try{
	checkNum(2);
	echo "if younsee this the no is 1 or below";
	}
//catch exception
	catch (Exception $e){
		echo "message:".$e->getMessage();
	}
?>