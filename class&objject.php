<?php
	/**
	 * class
	 */
	class fruit{
		public $name;
		public $color;
		//funtions
		function set_name($name){
			$this->name = $name;
		}
		function get_name(){
		return $this->name;
		}
		function set_color($color){
			$this->color = $color;
		}
		function get_color(){
		return $this->color;
		}
	}
	//setter
	$banana = new fruit();
	$banana->set_name("Banana");
	$banana->set_color("is yellow");
	//belongs to class or not
	var_dump($banana instanceof Fruit);
	//getter
	echo $banana->get_name();
	echo " ";
	echo $banana->get_color();
?>