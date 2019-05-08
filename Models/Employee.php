<?php

Class Employee{

	 public $id,$name , $skill , $major , $phone , $ratePerHour ='';

	function __construct($Id,$Name , $Skill , $Major , $Phone , $RatePerHour){
		$this->id = $Id;
		$this->name = $Name;
		$this->skill = $Skill;
		$this->major = $Major;
		$this->phone = $Phone;
		$this->ratePerHour = $RatePerHour;
	}
//--Id----------------------
	function getId(){
		echo $this->id;
	}
//--Name--------------------
	function getName(){
		echo $this->name;
	}

	function setName($value){
		$this->name = $value;
	}
//--Skill-------------------

	function getSkill(){
		echo $this->skill;
	}

	function setSkill($value){
		$this->skill = $value; 
	}
//--Major-------------------
	function getMajor(){
		echo $this->Major;
	}

	function setMajor($value){
		$this->Major = $value; 
	}
//--Phone-------------------
	function getPhone(){
		echo $this->phone;
	}

	function setPhone($value){
		$this->phone = $value; 
	}
//--RatePerHour-------------
	function getRatePerHour(){
		echo $this->ratePerHour;
	}

	function setRatePerHour($value){
		$this->ratePerHour = $value; 
	}

/*
	Static function that will Decode the object
	into array (JSON Array)
*/
	static function EmpDecode($emp){
		// return 	(array)$emp;
		return json_decode(json_encode($emp),true);
	}
}
?>


