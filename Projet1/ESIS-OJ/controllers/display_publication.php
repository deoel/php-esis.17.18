<?php
	require_once('../models/dao/connexiondb.class.php');
	require_once('../models/structure/publication.class.php');
	require_once('../models/dao/publication.dao.php');
	
	class DisplayPublication {
		private $tabpub;
		private $pubdao;
		
		public function __construct() {
			$this->pubdao = new PublicationDAO();
			$this->tabpub = $this->pubdao->getAllPublication();
		}
		
		public function aucunePublication() {
			if(count($this->tabpub) == 0) {
				echo '
					<div class="aucune-publication">
						<h2>Aucune publication du jour</h2>
						<br/><a href="new.php">Publier</a>
					</div>
				';
			}
		}
		
		public function afficherSuitePublication($id) {
			$pub = $this->pubdao->getPublication($id);
			
			$contenu = $pub->getContenu();
			$current_file = $_SERVER["PHP_SELF"];
			$parts = Explode('/',$current_file);
			$pg = str_replace('.php','',$parts[count($parts)-1]);
			
			$display =  '
				<p class="post-like">
					<strong><em>Posté le '.date('d/m/y à H:i',strtotime($pub->getDate())).'</em></strong> 
					<span class="like-dislike">
						<a href="../controllers/like.php?id='.$pub->getId().'&pg='.$pg.'">Like</a>['.$pub->getNblike().'] | 
						<a href="../controllers/dislike.php?id='.$pub->getId().'&pg='.$pg.'">Dislike</a>['.$pub->getNbdislike().']
					</span>
				</p>
				<p class="post-content">
					'.$contenu.'
				</p>
			';
			echo $display;
		}
		
		public function afficherToutesLesPublications() {
			foreach($this->tabpub as $pub) {
				$contenu = substr($pub->getContenu(),0,255).'...';
				$current_file = $_SERVER["PHP_SELF"];
				$parts = Explode('/',$current_file);
				$pg = str_replace('.php','',$parts[count($parts)-1]);
				
				$display =  '
					<p class="post-content">
						'.$contenu.'
						<a href="suite.php?id='.$pub->getId().'">Lire la suite</a>
					</p>
					<br/>
					<p class="post-like">
						<em>Posté le '.date('d/m/y à H:i',strtotime($pub->getDate())).'</em> 
						<span class="like-dislike">
							<a href="../controllers/like.php?id='.$pub->getId().'&pg='.$pg.'">Like</a>['.$pub->getNblike().'] | 
							<a href="../controllers/dislike.php?id='.$pub->getId().'&pg='.$pg.'">Dislike</a>['.$pub->getNbdislike().']
						</span>
					</p>
				';
				echo $display;
			}
			
		}
		
		public function publicationsDuJour() {
			$this->tabpub = $this->pubdao->getTodayPublication();
			$this->afficherToutesLesPublications();
			$this->aucunePublication();
		}
		
		public function afficherTop10() {
			$this->tabpub = $this->pubdao->top10();
			$this->afficherToutesLesPublications();
		}
	}
?>