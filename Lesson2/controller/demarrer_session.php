<?php
	session_start();
	if(!isset($_SESSION['pseudo'], $_SESSION['telephone']))
	{
		// Redirection vers la page index.php
		header('Location: ../index.php');
	}
?>