<?php
	require 'vendor/autoload.php';

	$Ref = new MongoDB\Client;

	$fCompany = $Ref->fCompany;

	$fEmpCollections = $fCompany->fEmpCollections;

	/*
		Find in mongodb means Select in the relational DBs
		so we have 3 types of find :
			1- Find all Documents in the collections:
				$documents = $Collection->find();

			2- Find Specific document in the collections:
				$document = $Collection->findOne(
					['Key'=>'Value']
				);
			
			3- Find all Documents with specific criteria :
				$documents = $Collection->find(
					['Key' => 'Value']
				);
	*/

	/*
		find all employees 
	*/
		echo "<br>Find all employees : <br>";

		$findCritiria = $fEmpCollections->find();

		foreach ($findCritiria as $key => $emp) {
			echo $key . ' : <br>';
			foreach ($emp as $key => $value) {
				echo $key . ' => ' . $value . '<br>';
			}
			echo '----------------<br>';
		}

	/*
		find employee with id => 3
	*/
		echo "<br>Find employee with id => 3 : <br>";

		$findOneResult = $fEmpCollections->findOne(
			['id'=>'3']
		);

		foreach ($findOneResult as $key => $value) {
			echo $key . ' => ' . $value . '<br>';
		}
		echo '----------------<br>';



	/*
		find employees with skill => MongoDB
	*/

		echo "<br>Find employees with skill => MongoDB : <br>";

		$findCritiria = $fEmpCollections->find(
			['skill' => 'MongoDB']
		);

		foreach ($findCritiria as $key => $emp) {
			echo $key . ' : <br>';
			foreach ($emp as $key => $value) {
				echo $key . ' => ' . $value . '<br>';
			}
			echo '----------------<br>';
		}


		

?>