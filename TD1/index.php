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
			<h3>Ajouter un nouvel etablissement</h3>
			<form method="post" action="add_ets.php">
				<label>Nom: </label>
				<input type="text" name="nom" /><br />
				<label>Adresse: </label>
				<input type="text" name="adresse" /><br />
				<label>Description: </label>
				<input type="text" name="description" /><br />
				<label>Téléphone: </label>
				<input type="text" name="telephone" /><br />
				<input type="submit" value="Envoyer" />
			</form>
        </div>
    </body>
	
</html>