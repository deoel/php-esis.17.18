<?php
    require_once('check_connexion.php');
?>
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
            <p>
                <em>Poster ici toutes les idées les plus folles que vous avez !!!</em>
                <img src="" alt="" />
            </p>
			<form method="post" action="new_idee.php"> 
                <?php
					echo '
						<input type="hidden" name="idcompte" value="'.$_SESSION['id'].'" />
					';
				?>
                <label>Nouvelle idée: </label><br />
				<textarea name="message"></textarea><br />
				<input type="submit" value="Poster" />
            </form>
        </div>
    </body>
</html>