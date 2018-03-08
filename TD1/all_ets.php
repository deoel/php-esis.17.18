<?php
	require_once('etablissement.class.php');
	
	$connexion = new PDO('mysql:host=localhost;dbname=annuaire_ets', 'root', '');
	$req = "SELECT * FROM etablissement";
	
	$data = $connexion->query($req);
	
	while($d = $data->fetch())
	{
		echo '
			<p>
				<strong>'.$d['nom'].' : </strong><br />
				'.$d['adresse'].'<br />
				'.$d['description'].'<br />
				'.$d['telephone'].'<br />
			</p>
			<hr/>
		';
	}
?>