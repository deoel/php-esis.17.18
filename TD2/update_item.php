<?php
	require_once('item.class.php');
	require_once('connexion.php');
	
	if(isset($_POST['id'],$_POST['nomplat'], $_POST['description'], 
			$_POST['categorie'], $_POST['prix'], $_POST['devise']))
	{
		$it = new Item($_POST['id'], $_POST['nomplat'], $_POST['description'], 
				$_POST['categorie'], $_POST['prix'], $_POST['devise']);
		
		$connexion = getConnexion();
		
		$req = "UPDATE item  SET nomplat = :nomplat, description = :description, 
				categorie = :categorie, prix = :prix, devise = :devise WHERE id = :id";
		$prepare = $connexion->prepare($req);
		
		$prepare->execute(array(
			'nomplat'=>$it->getNomplat(),
			'description'=>$it->getDescription(),
			'categorie'=>$it->getCategorie(),
			'prix'=>$it->getPrix(),
			'devise'=>$it->getDevise(),
			'id'=>$it->getId()
			));
			
		header('Location: index.php');
	}
	else
	{
		echo 'Erreur dans les données';
	}
?>