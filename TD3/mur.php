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
            <h3>Voici la liste de toutes les idées déjà postées</h3>
            <?php
                include('liste_idee.php');
            ?>
        </div>
    </body>
</html>