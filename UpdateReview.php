<?php
	require 'vendor/autoload.php';
	require 'Models/Employee.php';

	$Ref = new MongoDB\Client;

	$fCompany = $Ref->fCompany;

	$fEmpCollection = $fCompany->fEmpCollections;
	
	/*
		Update Statement May have deffirent meaning :
			1- Update Specific field : 
				1.1 : One Document.
				1.2 : Many Docuemnts.

			2- Add New field
				2.1 : One Docuemnt.
				2.1 : Many Docuemnts.

		the ruturn value of updateOne() will contain 3 values 
		we can use them to verify the update operation :
			1- matchedCount  => getMatchedCount()  , the number of matched documents
			2- modifiedCount => getModifiedCount() ,the number of modified documents
			3- upsertedId    => getUpsertedId()    ,the _id of the upserted document

	*/

	/*
		1- To Update a one document :
			1.1 - One Docuemnt : 
				$Collection->updateOne(
					['key' => 'vlaue'] * criteria * ,
					['$set' => [ 'key' => 'New Value' , 'key' => 'New Value']] * Values to update *
				);

			1.2 - Many Docuemnts : 
				$Collection->updateMany(
					['key' => 'vlaue'] * criteria * ,
					['$set' => [ 'key' => 'New Value' , 'key' => 'New Value']] * Values to update *
				);

	*/

	$OneResult = $fEmpCollection->updateOne(
		['id' => '1'],
		['$set' => ['name ' => 'Firas Shawa' , 'skill' => 'PHP' ]]
	);

	echo 'matchedCount : '.$OneResult->getMatchedCount() .' modifiedCount : ' . $OneResult->getModifiedCount(); 


	$ManyResult = $fEmpCollection->updateMany(
		['skill' => 'MongoDB'],
		['$set' => ['skill' => 'Mongo DataBase']]
	);

	echo 'matchedCount : '.$ManyResult->getMatchedCount() .' modifiedCount : ' . $ManyResult->getModifiedCount(); 



/*
		2- To Add new field :
			2.1 : One Docuemnt :
				$Collection->updateOne(
					['key' => 'vlaue'] * criteria * ,
					['$set' => [ 'New key' => 'New Value' , 'New key' => 'New Value']] * New Fields and their values *
				);
			2.1 : Many Docuemnts :
				$Collection->updateMany(
					['key' => 'vlaue'] * criteria * ,
					['$set' => [ 'New key' => 'New Value' , 'New key' => 'New Value']] * New Fields and their values *
				);
*/

	$OneResult = $fEmpCollection->updateOne(
		['id' => '2'],
		['$set' => ['State' => 'Married']]
	);

	echo 'matchedCount : '.$OneResult->getMatchedCount() .' modifiedCount : ' . $OneResult->getModifiedCount(); 


	$ManyResult = $fEmpCollection->updateMany(
		['skill' => 'Mongo DataBase'],
		['$set' => ['pre_skill' => 'DataBase Fundamentals']]
	);

	echo 'matchedCount : '.$ManyResult->getMatchedCount() .' modifiedCount : ' . $ManyResult->getModifiedCount(); 



?>