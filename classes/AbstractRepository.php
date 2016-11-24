<?php
	
	abstract class AbstractRepository{

		protected $classe;

		public function findById($id){

			$bdd = new Bdd();
			$req = $bdd->requeteSQL('SELECT * FROM ' . $this->classe . ' WHERE ID=?', array($id));

			return $req->fetchObject('Client');

		}

	}