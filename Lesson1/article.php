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
		<h1>Articles Informatique</h1>
		<p>
			<?php
				$articles = array(
					'Ordinateur'=>450,
					'CPU' => 150,
					'Clavier' =>15,
					'Ram' => 25,
					'Souris' => 10
				);
				
				afficherArticles($articles);
			?>
		</p>
		
		<h1>Fruits</h1>
		<p>
			<?php
				$fruits = array(
					'Pomme'=>1,
					'Apple' => 2,
					'Citron' =>0.5,
					'Banane' => 3,
					'Ananas' => 7.3
				);
				
				afficherArticles($fruits);
			?>
		</p>
	</body>
</html>