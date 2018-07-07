<?php

	class ConnexionDB {
		private static $connexion;
		
		private function __construct() {
			
		}
		
		static function getConnexion() {
			if(self::$connexion == null) {
				try {
					$host = 'mysql:host=localhost;dbname=esis_open_journal';
					$user = 'root';
					$pwd = '';
					self::$connexion = new PDO($host, $user, $pwd, 
					array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				
				} catch(Exception $e) {
					die('Erreur : '.$e->getMessage());
				}
			}
			
			return self::$connexion;
		}
	}
	
?>