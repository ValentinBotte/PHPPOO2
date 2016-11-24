<?php

	class ClientRepository extends AbstractRepository{

		

		public function __construct(){
			parent::__construct();
			$this->classe = 'client';
		}
		
	}