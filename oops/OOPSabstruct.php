<?php
	abstract class fruit
	{
		public $name;
		public $color;
		public function __construct($name,$color)
		{
			$this->name = $name;
			$this->color = $color;
		}
		abstract public function intro():string;
	}
		class apple extends fruit
		{
		public function intro():string
		{
			return "this is kashmiri apple and it is $this->color $this->name";
		}
	}
		class strawberry extends fruit
		{
		public function intro():string
		{
			return "this is american strawberry and it is $this->color $this->name";
		}
	}
	class  pomgranet extends fruit
	{
		
		public function intro():string
		{
			return "tis is indian pomgranet and it is $this->color $this->name";
		}
	}
	$apple = new apple("apple","red");
		echo $apple->intro();
			echo "<br>";
		echo $apple->color;
			echo "<br>";
		echo $apple->name;
			echo "<br>";
	$strawberry = new strawberry("strawberry","red");
		echo $strawberry->intro();
			echo "<br>";
		echo $strawberry->color;
			echo "<br>";
		echo $strawberry->name;
			echo "<br>";
	$pomgranet = new pomgranet("pomgranet","red");
		echo $strawberry->intro();
			echo "<br>";
		echo $pomgranet->color;
			echo "<br>";
		echo $pomgranet->name;

?>