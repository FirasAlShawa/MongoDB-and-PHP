<?php
	require 'vendor/autoload.php';

	/*
		new MongoDB\client => is used to make a referance to
		the MongoDB server and it take one param by default which 
		is : new MongoDB\client('mongodb://127.0.0.1:27017/') .
	*/
	$Ref = new MongoDB\client;


	/*
		Make new DB by using :
			$NewDB = $Ref->NameOfDB
	*/
	$fCompany = $Ref->fCompany; 
	// var_dump($fCompany);

	/*
		Collection Operations :
			1-New Collection :
				$NewCollection = $NewDB->createCollection("NameOfCollection");

			2-List Collections :
				$NewDB->listCollectoins()
				
				this is function will return a list of 
				objects .
				
				foreach($NewDB->listCollections() as $collection){
					var_dump($collection);
				}

			3-Drop Collectoin :
				$NewDB ->dropCollection("NameOfCollection")

	*/

	// $fEmpCollections = $fCompany->createCollection('fEmpCollections');
	// var_dump($fEmpCollections);
	$whiteSpace = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	echo "Collections : <br>";

	foreach ($fCompany->listCollections() as $collection) {
		//to view all data use -> var_dump($collection);
		echo $whiteSpace.$collection['name'];
	}

?>