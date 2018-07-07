<?php

	class PublicationDAO {
		private $db;
		
		public function __construct() {
			$this->db = ConnexionDB::getConnexion();
		}
		
		public function getPublication($id) {
			$str = "SELECT * FROM publication WHERE id = :id";
			$req = $this->db->prepare($str);
			
			$req->execute(array('id' => $id));
			$data = $req->fetch();
			
			$publication = new Publication($data['id'], $data['idEtudiant'], $data['contenu'], 
												$data['date'], $data['nblike'], $data['nbdislike']);
			return $publication;
		}
		
		public function nouvellePublication($publication) {
			$str = 'INSERT INTO publication VALUES(null, :idEtudiant,
			:contenu, now(), :nblike, :nbdislike)';
			
			$req = $this->db->prepare($str);
			$res = $req->execute(array(
				'idEtudiant' => $publication->getIdEtudiant(),
				'contenu' => $publication->getContenu(),
				'nblike' => $publication->getNblike(),
				'nbdislike' => $publication->getNbdislike()
			));
			
			if($res) {
				return True;
			} else {
				return False;
			}
		}
		
		public function top10() {
			return $this->getPubs('top10');
		}
		
		public function getAllPublication() {
			return $this->getPubs('all');
		}
		
		public function getTodayPublication() {
			return $this->getPubs('today');
		}		
		
		private function getPubs($critere) {
			if($critere == 'today') {
				$str = "SELECT * FROM `publication` WHERE DATE(date) = CURDATE() ORDER BY date DESC";
			} else if($critere == 'top10') {
				$str = "SELECT * FROM publication ORDER BY nblike DESC LIMIT 10";
			} else {
				$str = "SELECT * FROM publication ORDER BY date DESC";
			}
			
			$req = $this->db->query($str);
			
			$tabPub = array();
			
			while($data = $req->fetch()) {
				$publication = new Publication($data['id'], $data['idEtudiant'], $data['contenu'], 
												$data['date'], $data['nblike'], $data['nbdislike']);
				$tabPub[] = $publication;
			}
			
			return $tabPub;
		}
		
		public function like($publication) {
			return $this->ld('like', $publication);
		}
		
		public function dislike($publication) {
			return $this->ld('dislike', $publication);
		}
		
		private function ld($critere, $publication) {
			if($critere == 'like')
				$str = "UPDATE publication SET nblike = nblike + 1 WHERE id = :id";
			else 
				$str = "UPDATE publication SET nbdislike = nbdislike + 1 WHERE id = :id";
			
			$req = $this->db->prepare($str);
			$res = $req->execute(array('id' => $publication->getId()));
			
			return $res;
		}
	}
?>