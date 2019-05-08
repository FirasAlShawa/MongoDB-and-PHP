<?php 
	require 'vendor/autoload.php';


	$Ref = new MongoDB\Client;

	$fCompany = $Ref->fCompany;

	$fEmpCollection = $fCompany->fEmpCollections;

	/*
		Custom Find : 
			1- limit : will limit the found Documents to the 'Number'.
			2- skip  : will skip 'Number' of found Documents.
			3- sort  : will sort the Documents by the 'key'
					 	  if the value (1)  will sort ascending 
					 	  if the value (-1) will sort descending 
				$Collection->find(
					[],
					[
						'limit' => Number,
						'skip' => Number,
						'sort' => ['key' => 1 or -1]
					]
				)
	*/

	$FindResult = $fEmpCollection->find(
		[],
		[
			'limit' => 3 ,
			'skip'  => 1 ,
			'sort'  => ['name' => 1]
		]
	);

	foreach ($FindResult as $emp) {
		var_dump($emp);
	}
?>