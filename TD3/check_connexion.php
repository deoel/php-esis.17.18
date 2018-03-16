<?php 
    session_start();
    if(!(isset($_SESSION['id'], $_SESSION['nom'], $_SESSION['email'])))
    {
        header('Location: index.php');
    }

?>