<?php
	require_once('connexion.php');
	
	if(isset($_POST['idcompte'], $_POST['message']))
	{

        $connexion = getConnexion();
        
        $req = "INSERT INTO idee  VALUES(null, :idcompte, :message, now())";
        $prepare = $connexion->prepare($req);
        
        $resultat = $prepare->execute(array(
            'idcompte'=>$_POST['idcompte'],
            'message'=>$_POST['message']
            ));
            
        header('Location: mur.php');
	}
	else
	{
		echo 'Erreur dans les données';
	}
?>