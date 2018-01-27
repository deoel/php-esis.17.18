<?php
	function calculerNbVisteur($tab_vis)
	{
		$tv = 0;
		foreach($tab_vis as $n)
		{
			$tv += $n;
		}
		return $tv;
	}

	function afficherArticles($tab_art)
	{
		echo '<ul>';
		foreach($tab_art as $k => $v) {
			echo '<li>'.$k.' : 
						<strong>'.$v.'$</strong>
				  </li>';
		}
		echo '</ul>';
	}
?>