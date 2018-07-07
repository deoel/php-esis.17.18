<?php
	require_once('../models/dao/connexiondb.class.php');
	require_once('../models/structure/publication.class.php');
	require_once('../models/dao/publication.dao.php');
	require_once('../models/structure/commentaire.class.php');
	require_once('../models/dao/commentaire.dao.php');
	
	function ld($critere) {
		if(isset($_GET['id'], $_GET['pg'])) {
			$id = $_GET['id'];
			$pg = $_GET['pg'];
			
			$pubdao = new PublicationDAO();
			$publication = $pubdao->getPublication($id);
			
			if(isset($_GET['type'])) {
				$type = $_GET['type'];
				if($type == 'com') {
					$comdao = new CommentaireDAO();
					$commentaire = $comdao->getCommentaire($id);
					
					if($critere == 'like')
						$comdao->like($commentaire);
					else
						$comdao->dislike($commentaire);
				}
			} else {
				if($critere == 'like')
					$pubdao->like($publication);
				else
					$pubdao->dislike($publication);
			}
			
			switch($pg) {
				case 'today': header('Location: ../views/today.php'); break;
				case 'all': header('Location: ../views/all.php'); break;
				case 'top10': header('Location: ../views/top10.php'); break;
				case 'suite': header('Location: ../views/suite.php'); break;
			}
		} else {
			header('Location: index.php');
		}
	}
	
?>