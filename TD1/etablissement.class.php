<?php
	class Etablissement
	{
		private $id;
		private $nom;
		private $adresse;
		private $description;
		private $telephone;
		
		function __construct($id, $nom, $adresse, $description, $telephone) {
			$this->id = $id;
			$this->nom = $nom;
			$this->adresse = $adresse;
			$this->description = $description;
			$this->telephone = $telephone;
		}

		function getId() {
			return $this->id;
		}

		function getNom() {
			return $this->nom;
		}

		function getAdresse() {
			return $this->adresse;
		}

		function getDescription() {
			return $this->description;
		}

		function getTelephone() {
			return $this->telephone;
		}

		function setId($id) {
			$this->id = $id;
		}

		function setNom($nom) {
			$this->nom = $nom;
		}

		function setAdresse($adresse) {
			$this->adresse = $adresse;
		}

		function setDescription($description) {
			$this->description = $description;
		}

		function setTelephone($telephone) {
			$this->telephone = $telephone;
		}
	}
?>