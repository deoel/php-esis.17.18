<?php 

	function getConnexion() 
	{
		return new PDO('mysql:host=localhost;dbname=restaucr7', 'root', '');
	}

?>