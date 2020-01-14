<?php 
	/**
	 * 
	 */
	class fruit{
	public $name;
	public $color;
		function __construct($name,$color){
			$this->name = $name;
			$this->color = $color;
		}
		function __destruct()
		{
			echo "the fruit is {$this->name}. and color is {$this->color}.";
		}
	}
/*
or this is also same
$apple =  new fruit("apple","red");
*/
	$apple = new fruit();
	$apple->name = "apple";
	$apple->color ="red";
 ?>