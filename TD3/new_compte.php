<?php
	require_once('connexion.php');
	
	if(isset($_POST['nom'], $_POST['email'], $_POST['pwd'], 
			$_POST['pwdconf']))
	{

        if($_POST['pwd'] == $_POST['pwdconf']) 
        {
            $connexion = getConnexion();
            
            $req = "INSERT INTO compte  VALUES(null, :nom, :email, :pwd)";
            $prepare = $connexion->prepare($req);
            
            $resultat = $prepare->execute(array(
                'nom'=>$_POST['nom'],
                'email'=>$_POST['email'],
                'pwd'=>$_POST['pwd']
                ));
                
            if($resultat) 
            {
                header('Location: auth.php?email='.$_POST['email'].'&pwd='.$_POST['pwd'].'');
            }
            else
            {
                echo '<em>Votre email ou votre nom existe déjà</em><br/>';
                echo '<a href="compte.php">Recommencer</a>';
            }
        }
        else 
        {
            echo '<em>les deux mots de passes ne sont pas identiques</em><br/>';
            echo '<a href="compte.php">Recommencer</a>';
        }
	}
	else
	{
		echo 'Erreur dans les données';
	}
?>