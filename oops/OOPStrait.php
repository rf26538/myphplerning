<?php
	trait message1{
		public function msg1(){
			echo "oop is fun";
		}
	}
	trait message2{
		public function msg2(){
			echo "day is good ";
		}
	}
	class welcome{	
		use message1;
	}
	class welcome2{
	use message1,message2;
	}
	$obj = new welcome();
	$obj->msg1();
		echo "<br>";
	$obj2 = new welcome2();
	$obj2->msg2();
	$obj2->msg1();
?>