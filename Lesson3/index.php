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
			<h3>Tous les commentaires de notre journal</h3>
			<!-- liste de commentaires -->
			<?php
				include('liste_commentaire.php');
			?>
			<h3>Laisser un commentaire dans notre journal</h3>
			<form method="post" action="add_comment.php">
				<label>Pseudo: </label>
				<input type="text" name="pseudo" /><br />
				<label>Commentaire: </label>
				<textarea name="commentaire"></textarea><br />
				<input type="submit" value="Envoyer" />
			</form>
        </div>
    </body>
</html>