<?php

	trait tRepository{


		/*
			Retourne l'enregistrement de la table ayant pour l'id
			passé en paramètre.
		*/
		public function findById($id, $table){

			$bdd = new Bdd();
			$requete = $bdd->getPDO()->prepare('SELECT * FROM :table WHERE ID=:id');
			$requete->bindParam(":table", $table);
			$requete->bindParam(":id", $id);

			$requete->execute();

			return $requete->fetchAll(PDO::FETCH_COLUMN, 0);


		}


		/*
			 Renverra un tableau d'objets contenant tous les objets 
			 correspondant aux enregistrements trouvés dans la base
		*/
		public function findAll($table){

			$bdd = new Bdd();
			$requete = $bdd->prepare("SELECT * FROM :table");
			$requete->execute(array(
				":table" => $table,
			));

			return $requete->fetchAll(PDO::FETCH_COLUMN, 0);

		}

		public function insert($objet){



		}
		
	}