<?php
	


	abstract class AbstractRepository{

		protected $classe;
		private $bdd;

		public function __construct(){
			$this->bdd = new Bdd();
		}

		public function findById($id){

			$req = $this->bdd->requeteSQL('SELECT * FROM ' . $this->classe . ' WHERE ID=?', array($id));

			return $req->fetchObject($this->classe);

		}

		public function findAll(){

			$req = $this->bdd->requeteSQL('SELECT * FROM ' . $this->classe);
			$clients = array();

			while($data = $req->fetchObject($this->classe)){
				$clients[] = $data;
			}
			
			return $clients;

		}

	}