<?php

	class Commande{

		private $id;
		private $datecde;
		private $leClient;

		public function __toString(){
			return "Objet [COMMANDE] : [id] = " . $this->id . " - [datecde] = " . $this->datecde . " - [leClient] = " . $this->leClient;
		}
	
	}