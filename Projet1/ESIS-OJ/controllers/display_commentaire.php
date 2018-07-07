<?php
	require_once('../models/dao/connexiondb.class.php');
	require_once('../models/structure/commentaire.class.php');
	require_once('../models/dao/commentaire.dao.php');
	
	class DisplayCommentaire {
		private $tabcom;
		private $comdao;
		private $idPublication;
		
		public function __construct($idPublication) {
			$this->comdao = new CommentaireDAO();
			$this->idPublication = $idPublication;
			$this->tabcom = $this->comdao->getAllCommentaire($this->idPublication);
		}
		
		public function aucunCommentaire() {
			if(count($this->tabcom) == 0) {
				echo '
					<h3>Aucun commentaire</h3>
				';
			} else {
				$this->afficherTousLesCommentaires();
			}
		}
		
		public function afficherTousLesCommentaires() {
			$c = count($this->tabcom);
			$add_s = $c > 1 ? 's' : '';
			echo '<h3>'.$c.' Commentaire'.$add_s.'</h3>';
			
			foreach($this->tabcom as $com) {
				$contenu = $com->getContenu();
				$current_file = $_SERVER["PHP_SELF"];
				$parts = Explode('/',$current_file);
				$pg = str_replace('.php','',$parts[count($parts)-1]);
				
				$display =  '
					<p class="post-content-comment">
						'.$contenu.'
					</p>
					<br/>
					<p class="post-like-comment">
						<em>Posté le '.date('d/m/y à H:i',strtotime($com->getDate())).'</em> 
						<span class="like-dislike-comment">
							<a href="../controllers/like.php?id='.$com->getId().'&pg='.$pg.'&type=com">Like</a>['.$com->getNblike().'] | 
							<a href="../controllers/dislike.php?id='.$com->getId().'&pg='.$pg.'&type=com">Dislike</a>['.$com->getNbdislike().']
						</span>
					</p>
				';
				echo $display;
			}
			
		}
	}
?>