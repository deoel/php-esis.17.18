<h1>LE MUR DES IDEES</h1>
<nav>
	<ul>
		<li><a href="idee.php">Nouvelle idée</a></li> |
		<li><a href="mur.php">Mur</a></li> 
		<?php
			if(isset($_SESSION['id']))
			{
				echo '| <li><a href="deconnexion.php">Se deconnecter</a></li>';
				echo '| ['.$_SESSION['nom'].']';
			}
		?>
	</ul> 
</nav>
<hr/>