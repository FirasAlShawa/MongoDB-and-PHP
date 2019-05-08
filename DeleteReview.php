<?php
	require 'vendor/autoload.php';

	$Ref = new MongoDB\Client;

	$fCompany = $Ref->fCompany;

	$fEmpCollection = $fCompany->fEmpCollections;

	/*
		To Delete only one Document :
			$Collection->DeleteOne(
				['key' => 'value']
			);
		
		the return value of DeleteOne will contain value 
		we can use it to verify the delete operation :
			1- DeletedCount = getDeletedCount() , the number of deleted Documents.
	*/

	$OneResult = $fEmpCollection->DeleteOne(
		['id' => 3]
	);

	echo 'Delete Count : ' . $OneResult.getDeletedCount();

	/*
		To Delete Many Documents with the same 'value' :
			$Collection->DeleteOne(
				['key' => 'value']
			);
		
		the return value of DeleteOne will contain value 
		we can use it to verify the delete operation :
			1- DeletedCount = getDeletedCount() , the number of deleted Documents.
	*/

	$ManyResult = $fEmpCollection->DeleteMany(
		['skill' => 'Mongo DataBase']
	);

	echo '<br>Delete Count : ' . $ManyResult.getDeletedCount();



?>