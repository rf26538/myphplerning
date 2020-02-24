<?php
class TV
	{
		protected $model;
		public $volume;
		function volumeup()
		{
			$this->volume++;
		}
		function volumedown()
		{
			$this->volume--;
		}
		function getmodel()
		{
			return $this->model;
		}
		function __construct($m,$v)
		{
		$this->model = $m;
		$this->volume = $v;
		}
	}
	class plazma extends TV
	{
		
		function getmodel()
		{
			return $this->model;
		}
	}
	$tv = new plazma("xyz",2);
	echo $tv->getmodel();
?>