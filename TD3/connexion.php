<?php 

	function getConnexion() 
	{
		return new PDO('mysql:host=localhost;dbname=mur_idees', 'root', '');
	}

?>