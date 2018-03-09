<?php
	require_once('item.class.php');
	require_once('connexion.php');
	
	if(isset($_POST['nomplat'], $_POST['description'], $_POST['categorie'], 
			$_POST['prix'], $_POST['devise']))
	{
		$it = new Item(0, $_POST['nomplat'], $_POST['description'], 
				$_POST['categorie'], $_POST['prix'], $_POST['devise']);
		
		$connexion = getConnexion();
		
		$req = "INSERT INTO item  VALUES(null, :nomplat, :description, 
				:categorie, :prix, :devise)";
		$prepare = $connexion->prepare($req);
		
		$prepare->execute(array(
			'nomplat'=>$it->getNomplat(),
			'description'=>$it->getDescription(),
			'categorie'=>$it->getCategorie(),
			'prix'=>$it->getPrix(),
			'devise'=>$it->getDevise()
			));
			
		header('Location: index.php');
	}
	else
	{
		echo 'Erreur dans les données';
	}
?>