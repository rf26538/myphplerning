<?php
	class GoodBye
	{
	const LEAVING_MESSAGE = 'thanks for visiting this site';
	public function byebye(){
		echo self::LEAVING_MESSAGE;
		}
	}
	$GoodBye = new GoodBye();
	$GoodBye->byebye();
?>