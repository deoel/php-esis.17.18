<?php
	require_once('../models/dao/connexiondb.class.php');
	require_once('../models/structure/commentaire.class.php');
	require_once('../models/dao/commentaire.dao.php');
	
	if(isset($_POST['idEtudiant'], $_POST['idPublication'], $_POST['contenu'])) {
		$idEtudiant = $_POST['idEtudiant'];
		$idPublication = $_POST['idPublication'];
		$contenu = $_POST['contenu'];
		
		$commentaire = new Commentaire(0, $idEtudiant, $idPublication, $contenu, null, 0, 0);
		$comdao = new CommentaireDAO();

		$res = $comdao->ajouterCommentaire($commentaire);
		
		header('Location: ../views/suite.php');
		
	} else {
		echo 'Erreur dans les données envoyées!';
	}
?>