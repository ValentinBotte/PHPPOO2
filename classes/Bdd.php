<?php


	class Bdd{
		private $_dbmysql;

		public function __construct(){
			try{

				$connect_str = "mysql:host=localhost;dbname=clientsoo";
				$connect_user = "root";
				$connect_pass = "";

				$options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
				$this->_dbmysql = new PDO($connect_str, $connect_user, $connect_pass, $options);
			}catch(Exception $e){
				throw new  Exception("Erreur à la connexion", 1);
			}

		}

		/*

			Retourne la requête

		*/
		public function requeteSQL($sql, $params){
			$req = $this->_dbmysql->prepare($sql);
			$req->execute($params);
			return $req;
		}
	
	}

?>