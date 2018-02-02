<?php
	require_once('demarrer_session.php');
?>
<!doctype html>
<html> 
    <head> 
        <title>Citation Favorite</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="static/css/style.css" />
    </head>
    <body>
        <div id="content"> 
            <?php
				include_once('head.php');
			?>
			<hr/>
			<?php
				require_once('liste_citations.php');
				require_once('func.php');
				
				// Vérifier si le cookie existe
				if(isset($_COOKIE['favorite'])) 
				{
					$id_fav = $_COOKIE['favorite'];
					afficher_citation_favorite($liste_citations, $id_fav);
				}
				
				
			?>
        </div>
    </body>
</html>