<?php
	class fulltimeEmploye()
	{
	protected $firstname;
	protected $lastname;
	protected $annualsalary;
	function getFullName()
	{
		$this->firstname." ".$this->lastname;
	}
	}
	function annualSalary()
	{
		$this->annualsalary;
	}
?>