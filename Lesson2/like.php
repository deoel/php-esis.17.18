<?php
	
	if(isset($_GET['id']))
	{
		// Définir un cookie qui va expirer dans 10 minutes
		setcookie('favorite', $_GET['id'], time() + 60*10);
		
		// Redirection vers la page all_citations.php
		header('Location: all_citations.php');
	}
	else 
	{
		echo "<mark>L'identifiant de la citation n'est pas valide</mark><br/>";
		echo '<a href="all_citations.php">Revenir à la page des citations</a><br/>';		
	}
?>