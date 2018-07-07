<?php require_once('check_connexion.php'); ?>
<!doctype html>
<html>
	<head>
		<title>ESIS-OJ</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="static/css/style.css" />
		<link rel="stylesheet" href="static/css/today.css" />
	</head>
	<body>
		<?php include_once('head.php'); ?>
		
		<div class="content">
			<div class="toutes-publications">
				<h2>Top 10</h2>
				<?php 
					include_once('../controllers/display_publication.php'); 
					$dp = new DisplayPublication();
					$dp->afficherTop10();
				?>
			</div>
		</div>
		
		<?php include_once('foot.php'); ?>
		
	</body>
</html>