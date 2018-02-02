<?php
	require_once('../controller/demarrer_session.php');
?>
<!doctype html>
<html> 
    <head> 
        <title>Toutes les citations</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../static/css/style.css" />
    </head>
    <body>
        <div id="content"> 
            <?php
				include_once('head.php');
			?>
			
			<?php
				require_once('../model/liste_citations.php');
				require_once('../controller/func.php');
				
				afficher_citations($liste_citations);
			?>
        </div>
    </body>
</html>