<?php
	class Item {
		private $id;
		private $nomplat;
		private $description;
		private $categorie;
		private $prix;
		private $devise;
		
		function __construct($id, $nomplat, $description, $categorie, $prix, $devise) {
			$this->id = $id;
			$this->nomplat = $nomplat;
			$this->description = $description;
			$this->categorie = $categorie;
			$this->prix = $prix;
			$this->devise = $devise;
		}

		function getId() {
			return $this->id;
		}

		function getNomplat() {
			return $this->nomplat;
		}

		function getDescription() {
			return $this->description;
		}

		function getCategorie() {
			return $this->categorie;
		}

		function getPrix() {
			return $this->prix;
		}

		function getDevise() {
			return $this->devise;
		}
	}
?>