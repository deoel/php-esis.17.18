<?php require_once('check_connexion.php'); ?>
<!doctype html>
<html>
	<head>
		<title>ESIS-OJ</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="static/css/style.css" />
		<link rel="stylesheet" href="static/css/today.css" />
		<link rel="stylesheet" href="static/css/suite.css" />
	</head>
	<body>
		<?php include_once('head.php'); ?>
		
		<div class="content">
			<div class="toutes-publications">
				<?php 
					include_once('../controllers/display_publication.php'); 
					$dp = new DisplayPublication();
					if(isset($_GET['id'])) {
						$id = $_GET['id'];
						$_SESSION['idPublication'] = $id;
						$dp->afficherSuitePublication($id);
					} else if(isset($_SESSION['idPublication'])) {
						$id = $_SESSION['idPublication'];
						$dp->afficherSuitePublication($id);
					}
					
					//Commentaires 
					
					include_once('../controllers/display_commentaire.php'); 
					
					if(isset($_GET['id'])) {
						$id = $_GET['id'];
						$_SESSION['idPublication'] = $id;
						$dp = new DisplayCommentaire($id);
					} else if(isset($_SESSION['idPublication'])) {
						$id = $_SESSION['idPublication'];
						$dp = new DisplayCommentaire($id);
					}
					
					$dp->aucunCommentaire();
				?>
				
				<form method="post" action="../controllers/add_commentaire.php" class="add-comment">
					<?php
						require_once('../models/structure/etudiant.class.php');
						require_once('../models/dao/etudiant.dao.php');
						
						$etudao = new EtudiantDAO();
						$matricule = $_SESSION['matricule'];
						$idEtudiant = $etudao->getEtudiantByMatricule($matricule)->getId();
						
						echo '
							<input type="hidden" name="idEtudiant" value="'.$idEtudiant.'" />
							<input type="hidden" name="idPublication" value="'.$id.'" />
						';
					?>
					<textarea name="contenu" placeholder="Votre commentaire ici" required></textarea><br />
					<input type="submit" value="Ajouter" />
				</form>
			</div>
		</div>
		
		<?php include_once('foot.php'); ?>
	</body>
</html>