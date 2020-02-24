<?php
	class TV
	{
		public $model;
		public $volume;
		function volumeup()
		{
			$this->volume++;
		}
		function volumedown()
		{
			$this->volume--;
		}
		function __construct($m,$v)
		{
			$this->model = $m;
			$this->volume = $v;
		}
	}
	$tv = new TV("def",2);
		echo $tv->model;
		echo $tv->volume;
		echo "<br>";
	$tv->volumeup();
		echo $tv->volume;
		echo "<br>";
	$tv_one = new TV("xyz",8);
		echo $tv_one->model;
		echo $tv->volume;
		echo "<br>";
	$tv_one->volumedown();
		echo $tv_one->volume;
		echo "<br>";
//	overriding of function
	/*class plazma extends TV
	{
		
		function __construct($model,$volume)
		{
			$this->modal = $model;
			$this->volume = $volume;
		}
	}*/
// extends uses all the values of the upper class
		class sonyTV extends TV
		{
			public $sonyTV = true;
		}
	$sonyTV = new sonyTV("sonyTV",4);
		echo $sonyTV->model;
		echo $sonyTV->volume;
	echo "<br>";
	$sonyTV->volumeup();
		echo $sonyTV->volume;
	echo "<br>";
	$sonyTV->volumedown();
		echo $sonyTV->volume;
?>