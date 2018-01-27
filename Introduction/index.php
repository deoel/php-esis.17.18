<!doctype html>
<html>
	<head>
		<title>Page Statique</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php  
			require_once('about.php');
		?>
		<p>
			J'apprends maintenant le 
			<strong>PHP</strong>
		</p>
		<p>
			Bonjour <?php  //echo $_GET['prenom'];  ?>
		</p>
		<?php  
			require_once('about.php');
		?>
	</body>
</html>