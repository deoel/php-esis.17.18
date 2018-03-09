<!doctype html>
<html> 
    <head> 
        <title>Home</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="static/css/style.css" />
    </head>
    <body>
        <div id="content"> 
            <?php
				include_once('head.php');
			?>
			<h3>Modifier l'item dont l'id est : <?php echo $_GET['id']; ?></h3>
			<form method="post" action="update_item.php">
				<?php
					echo '
						<input type="hidden" name="id" value="'.$_GET['id'].'" />
					';
				?>
				<label>Nom plat: </label>
				<input type="text" name="nomplat" /><br />
				<label>Description: </label>
				<input type="text" name="description" /><br />
				<label>Catégorie: </label>
				<select name="categorie">
					<option value="Boisson">Boisson</option>
					<option value="Plat simple">Plat simple</option>
					<option value="Plat complet">Plat complet</option>
				</select><br />
				<label>Prix: </label>
				<input type="text" name="prix" /><br />
				<label>Devise: </label>
				<select name="devise">
					<option value="FC">FC</option>
					<option value="$">$</option>
				</select><br />
				<input type="submit" value="Enregistrer" />
			</form>
        </div>
    </body>
	
</html>