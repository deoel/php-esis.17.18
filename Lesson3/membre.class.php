<?php
	class Membre
	{
		private $id;
		private $pseudo;
		private $commentaire;
		
		public function __construct($id, $pseudo, $commentaire)
		{
			$this->id = $id;
			$this->pseudo = $pseudo;
			$this->commentaire = $commentaire;
		}
		
		public function getId()
		{
			return $this->id;
		}
		
		public function getPseudo()
		{
			return $this->pseudo;
		}
		
		public function getCommentaire()
		{
			return $this->commentaire;
		}
	}
?>