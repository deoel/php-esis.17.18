<?php
	require_once('membre.class.php');
	
	$connexion = new PDO('mysql:host=localhost;dbname=esis_open_journal', 'root', '');
	$req = "SELECT * FROM membre";
	
	$data = $connexion->query($req);
	
	while($d = $data->fetch())
	{
		echo '
			<p>
				<strong>'.$d['pseudo'].' : </strong><br />
				'.$d['commentaire'].'
			</p>
			<hr/>
		';
	}
?>