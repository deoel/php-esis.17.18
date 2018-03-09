<?php
	require_once('connexion.php');
	
	if(isset($_GET['id']))
	{
		$connexion = getConnexion();
		
		$req = "DELETE FROM item WHERE id = :id";
		$prepare = $connexion->prepare($req);
		
		$prepare->execute(array(
			'id'=>$_GET['id']
			));
			
		header('Location: index.php');
	}
	else
	{
		echo 'Erreur dans les données';
	}
?>