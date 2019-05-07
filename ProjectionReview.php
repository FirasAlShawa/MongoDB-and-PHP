<?php
	require 'vendor/autoload.php';

	$Ref = new MongoDB\Client;

	$fCompany = $Ref->fCompany;

	$fEmpCollections = $fCompany->fEmpCollections;

	/*
		Projection is parametar in the find function:
			$Collection->find(
				['key' => 'vlaue'],
				['projection' => ['key' => priority]]
			)

		**note:
			to remove the id from projection :
				set the _id to zero 
				['projection' => ['_id' => 0 , 'key' => priority ]]
	*/


	/*
		find employees with skill => MongoDB 
		and Show only their phone and skill :
	*/

		echo "<br>Find employees with skill => MongoDB : <br>";

		$findCritiria = $fEmpCollections->find(
			['skill' => 'MongoDB'],
			['projection' => ['_id' => 0 ,'phone' => 1 , 'skill' => 2 ]]
		);

		foreach ($findCritiria as $key => $emp) {
			echo $key . ' : <br>';
			foreach ($emp as $key => $value) {
				echo $key . ' => ' . $value . '<br>';
			}
			echo '----------------<br>';
		}


		

?>
