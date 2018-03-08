<?php
	require_once('membre.class.php');
	
	if(isset($_POST['pseudo'], $_POST['commentaire']))
	{
		$ps = $_POST['pseudo'];
		$co = $_POST['commentaire'];
		$m = new Membre(0, $ps, $co);
		
		$connexion = new PDO('mysql:host=localhost;dbname=esis_open_journal', 'root', '');
		
		$req = "INSERT INTO membre  VALUES(null, :pseudo, :commentaire)";
		$prepare = $connexion->prepare($req);
		
		$prepare->execute(array(
			'pseudo'=>$m->getPseudo(),
			'commentaire'=>$m->getCommentaire()
			));
			
		header('Location: index.php');
	}
	else
	{
		echo 'Erreur dans les données';
	}
?>