<?php
	session_start();
	
	// Vérifier si les deux variables existent
	if(isset($_POST['pseudo'], $_POST['telephone']))
	{
		// Vérifier si les deux variables ne sont pas vides
		if(!empty($_POST['pseudo']) and !empty($_POST['telephone'])) {
			
			/* Stocker les deux valeurs dans la session 
				pour y avoir accès sur d'autres pages*/
				
			$_SESSION['pseudo'] = $_POST['pseudo'];
			$_SESSION['telephone'] = $_POST['telephone'];
			
			// Redirection vers la page home.php
			header('Location: home.php');
		}
		else
		{
			echo '<mark>Il faut remplir tous les champs</mark><br/>';
			echo '<a href="index.php">Recommencer</a><br/>';
		}
	}
	else 
	{
		echo '<mark>Erreur dans les variables</mark><br/>';
		echo '<a href="index.php">Recommencer</a><br/>';
		
	}
?>