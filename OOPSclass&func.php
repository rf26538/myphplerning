<?php
	class TV
	{
		public $modal;
		public $volume = 1;
		function volumeup(){
			$this->volume++;
		}
		function volumedown(){
			$this->volume--;
		}
	}
	$tv_one = new TV;
	$tv_two = new TV();
	$tv_one->modal = "abc";
		echo $tv_one->modal;
	echo "<br>"; 
	$tv_two->modal = "xyz";
		echo $tv_two->modal;
		echo "<br>";
	$tv_one->volumeup();
		echo $tv_one->volume;
	$tv_two->volumedown();
		echo "<br>";
	echo $tv_two->volume;
?>