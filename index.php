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
			require_once 'interfaces\iRepository.php';
			AutoLoader::register();

	
			$cliRepo = new ClientRepository();

			echo $cliRepo->findById(1);
			
		?>
	</body>

</hmtl>