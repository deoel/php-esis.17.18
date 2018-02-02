<?php
	
	function afficher_citations($tab_citations) 
	{
		foreach($tab_citations as $k => $v) 
		{
			$auteur = $v[0];
			$citation = $v[1];
			
			echo '
				<p>
					<strong>'.$auteur.': </strong>
					'.$citation.' <br/><a href="../controller/like.php?id='.$k.'">[Like]</a>
				</p>
			';
		}
	}

	function afficher_citation_favorite($tab_citations, $id)
	{
		$v = $tab_citations[$id];
		$auteur = $v[0];
		$citation = $v[1];
		echo '
			<p class="cit_fav">
				<strong>'.$auteur.': </strong>
				'.$citation.' <br/>
			</p>
		';
	}
?>