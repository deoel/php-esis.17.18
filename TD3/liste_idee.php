<?php
	require_once('connexion.php');
	
	$connexion = getConnexion();
	$req = "SELECT * FROM idee, compte WHERE compte.id = idee.idcompte";
	
	$data = $connexion->query($req);
	
	while($d = $data->fetch())
	{
        echo '
            <p class="idee">
                <strong>['.$d['nom'].']</strong> : '.$d['message'].' <br /> 
                <em class="dp">Postée le '.$d['date'].'</em>
            </p>
        ';
	}
	
?>