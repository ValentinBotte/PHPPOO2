<!DOCTYPE html>

<html>

	<head>
		<title>PHPPOO2</title>
		<meta charset="utf-8">
	</head>

	<body>


		<?php

			// Autoload de toutes les classes
			require 'autoloader.php';
			AutoLoader::register();

	

				// TEST POUR LES FINDBYID
				$cliRepo = new ClientRepository();
				//echo $cliRepo->findById(1);	//OK

				echo '<br>';

				$comRepo = new CommandeRepository();
				//echo $comRepo->findById(1); //OK

				echo '<br>';


				//TEST POUR LES FINDALL
				$allRepo = new ClientRepository();
				//print_r($allRepo->findAll()); //OK

				$allCommande = new CommandeRepository();
				//print_r($allCommande->findAll()); //OK


			

			
		?>


	</body>

</hmtl>