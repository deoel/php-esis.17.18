<?php 

	function getConnexion() 
	{
		return new PDO('mysql:host=localhost;dbname=restaurant', 'root', '');
	}

?>