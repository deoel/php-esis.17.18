<?php
	require_once('connexion.php');
	
	$connexion = getConnexion();
	$req = "SELECT * FROM item";
	
	$data = $connexion->query($req);
	
	echo '
		<table>
			<tr>
				<th colspan="6">MENU</th>
			</tr>
			<tr>
				<th>N°</th>
				<th>NOM PLAT</th>
				<th>DESCRIPTION</th>
				<th>CATEGORIE</th>
				<th>PRIX</th>
				<th>ACTIONS</th>
			</tr>
	';
	$i = 1;
	while($d = $data->fetch())
	{
		echo '
			<tr>
				<td>'.$i.'</td>
				<td>'.$d['nomplat'].'</td>
				<td>'.$d['description'].'</td>
				<td>'.$d['categorie'].'</td>
				<td>'.$d['prix'].' '.$d['devise'].'</td>
				<td>
					<a href="mod_item.php?id='.$d['id'].'">Modifier</a>|
					<a href="del_item.php?id='.$d['id'].'">Supprimer</a>
				</td>
			</tr>
		';
		
		$i++;
	}
	echo '</table>';
?>