<?php

	class EtudiantDAO {
		private $db;
		
		public function __construct() {
			$this->db = ConnexionDB::getConnexion();
		}
		
		public function seConnecter($etudiant) {
			$str = "SELECT * FROM etudiant WHERE matricule = :matricule AND pwd =  :pwd";
			$req = $this->db->prepare($str);
			$req->execute(array(
				'matricule' => $etudiant->getMatricule(),
				'pwd' => $etudiant->getPwd()
			));
			
			$res = $req->fetch();
			
			if($res != null) {
				return True;
			} else {
				return False;
			}
		}
		
		public function creerCompte($etudiant) {
			$str = "INSERT INTO etudiant VALUES(null, :matricule, :pwd)";
			$req = $this->db->prepare($str);
			$res = $req->execute(array(
				'matricule' => $etudiant->getMatricule(),
				'pwd' => $etudiant->getPwd()
			));
			
			if($res) {
				return True;
			} else {
				return False;
			}
		}
		
		public function getEtudiantByMatricule($matricule) {
			$str = "SELECT * FROM etudiant WHERE matricule = :matricule";
			$req = $this->db->prepare($str);
			$req->execute(array(
				'matricule' => $matricule
			));
			
			$data = $req->fetch();
			$etudiant = new Etudiant($data['id'], $data['matricule'], $data['pwd']);
			
			return $etudiant;
		}
	}
?>