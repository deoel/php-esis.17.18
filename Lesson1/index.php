<?php
	require_once('func.php');
?>
<!doctype html>
<html>
	<head>
		<title>Lesson1</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Lesson1</h1>
		<p>
		Vous avez eu 
		<?php
			$tab_visites = array(12, 18, 25, 30, 50, 150, 800);
			$r = calculerNbVisteur($tab_visites);
			echo '<strong>'.$r.'</strong>';
		?>
		visites sur votre site
		</p>
	</body>
</html>