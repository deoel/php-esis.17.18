<?php
	require_once('connexion.php');
	
    if(isset($_POST['email'], $_POST['pwd']) or 
        isset($_GET['email'], $_GET['pwd']))
	{
        $email = '';
        $pwd = '';
        if(isset($_POST['email'], $_POST['pwd']))
        {
            $email = $_POST['email'];
            $pwd = $_POST['pwd'];
        }
        else
        {
            $email = $_GET['email'];
            $pwd = $_GET['pwd'];
        }

        $connexion = getConnexion();
        
        $req = "SELECT * FROM compte  WHERE email = :email AND pwd = :pwd";
        $prepare = $connexion->prepare($req);
        
        $prepare->execute(array(
            'email'=>$email,
            'pwd'=>$pwd
            ));
            
        if($data = $prepare->fetch()) 
        {
            session_start();
            $_SESSION['id'] = $data['id'];
            $_SESSION['nom'] = $data['nom'];
            $_SESSION['email'] = $data['email'];

            header('Location: mur.php');
        }
        else
        {
            echo '<em>Email ou mot de passe incorrect</em><br/>';
            echo '<a href="index.php">Recommencer</a>';
        }
	}
	else
	{
		echo 'Erreur dans les données';
	}
?>