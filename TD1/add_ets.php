<?php
	require_once('etablissement.class.php');
	
	if(isset($_POST['nom'], $_POST['adresse'], $_POST['description'], $_POST['telephone']))
	{
		$ets = new Etablissement(0, $_POST['nom'], $_POST['adresse'], $_POST['description'], $_POST['telephone']);
		
		$connexion = new PDO('mysql:host=localhost;dbname=annuaire_ets', 'root', '');
		
		$req = "INSERT INTO etab  VALUES(null, :nom, :adresse, :description, :telephone)";
		$prepare = $connexion->prepare($req);
		
		$prepare->execute(array(
			'nom'=>$ets->getNom(),
			'adresse'=>$ets->getAdresse(),
			'description'=>$ets->getDescription(),
			'telephone'=>$ets->getTelephone()
			));
			
		header('Location: liste_ets.php');
	}
	else
	{
		echo 'Erreur dans les données';
	}
?>