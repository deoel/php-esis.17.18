<?php

	class CommentaireDAO {
		private $db;
		
		public function __construct() {
			$this->db = ConnexionDB::getConnexion();
		}
		
		public function getCommentaire($id) {
			$str = "SELECT * FROM commentaire WHERE id = :id";
			$req = $this->db->prepare($str);
			
			$req->execute(array('id' => $id));
			$data = $req->fetch();
			
			$commentaire = new Commentaire($data['id'], $data['idEtudiant'], $data['idPublication'], $data['contenu'], 
												$data['date'], $data['nblike'], $data['nbdislike']);
			return $commentaire;
		}
		
		public function ajouterCommentaire($commentaire) {
			$str = "INSERT INTO commentaire VALUES(null, :idEtudiant, :idPublication, :contenu, NOW(), 0, 0)";
			$req = $this->db->prepare($str);
			$res = $req->execute(array(
				'idEtudiant' => $commentaire->getIdEtudiant(),
				'idPublication' => $commentaire->getIdPublication(),
				'contenu' => $commentaire->getContenu()
			));
			
			return $res;
		}
		
		public function getAllCommentaire($idPublication) {
			$str = "SELECT * FROM commentaire WHERE idPublication = :idPublication ORDER BY date ASC";
			$req = $this->db->prepare($str);
			$req->execute(array('idPublication' => $idPublication));
			
			$tabcom = array();
			
			while($data = $req->fetch()) {
				$commentaire = new Commentaire($data['id'], $data['idEtudiant'], $data['idPublication'], $data['contenu'], 
												$data['date'], $data['nblike'], $data['nbdislike']);
				$tabcom[] = $commentaire;
			}
			
			return $tabcom;
		}
		
		public function like($commentaire) {
			return $this->ld('like', $commentaire);
		}
		
		public function dislike($commentaire) {
			return $this->ld('dislike', $commentaire);
		}
		
		private function ld($critere, $commentaire) {
			if($critere == 'like')
				$str = "UPDATE commentaire SET nblike = nblike + 1 WHERE id = :id";
			else 
				$str = "UPDATE commentaire SET nbdislike = nbdislike + 1 WHERE id = :id";
			
			$req = $this->db->prepare($str);
			$res = $req->execute(array('id' => $commentaire->getId()));
			
			return $res;
		}
	}
?>