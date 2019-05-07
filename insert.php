<?php
	require 'vendor/autoload.php';
	require 'Models/Employee.php';

	$Ref = new MongoDB\Client;

	/*
		To select already existing DB :
			$DB = $Ref->dbName	
	*/
	$fCompany = $Ref->fCompany;

	/*
		To select already exisiting Collection :
			$Collection = $DB->CollectionName 
	*/
	$fEmpCollections = $fCompany->fEmpCollections;

	/*
		To insert only one docuement you can use
			$Collection->insertOne( Json Array or Associative Array)
		
		To get the last inserted docuemnt _ID 
			$insertResult = $Collection->insertOne( Json Array or Associative Array)
			$insertResult->getInsertedId();

		** Note :
			if you didn't 

	*/

	/*
		new Employee('Name','Skill','Major','Phone','RatePerHour');
	*/

	$emp = new Employee('firas','MongoDB','Software Engineering','0506104963','50');

	/*
		use the static function (EmpDecode(Employee object))
		to decode the object into json array
	*/
	$fEmpCollections->insertOne(Employee::EmpDecode($emp));



?>