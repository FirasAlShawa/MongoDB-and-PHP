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
		new Employee('id','Name','Skill','Major','Phone','RatePerHour');
	*/

	$emp = new Employee('1','Firas','MongoDB','Software Engineering','0506104963','120');

	/*
		To insert only one docuement you can use
			$Collection->insertOne( Json Array or Associative Array)
		
		To get the last inserted docuemnt _ID 
			$insertResult = $Collection->insertOne( Json Array or Associative Array)
			$insertResult->getInsertedId();

		** Note :
			if you didn't specify the id of each docuemnt 
			mongodb will generate random id and asign it 
			to the document.
	*/

	/*
		use the static function (EmpDecode(Employee object))
		to decode the object into json array
	*/
	
	$fEmpCollections->insertOne(Employee::EmpDecode($emp));

	

	/*
		Insert Many Documents at once :

			1- make array of objects
	*/
	$emps = array(
		 new Employee('2','Essam','Management','Business Adminstraion','0507078070','150'),
		 new Employee('3','Addai','MongoDB','Software Engineering','0506104984','80'),
		 new Employee('4','Mohammad','Bootstrap','Computer Science','0506105789','50')
	);

	/*
			2-Decode each object and keep them in array
	*/
	foreach ($emps as $key => $emp) {
		$emps[$key] = Employee::EmpDecode($emp);
	}

	/*
			3- To insert Many Docuemnts at once you should use :
				$Collection->insertMany(Array of Documents);
		
	*/
	$fEmpCollections->insertMany($emps);


?>