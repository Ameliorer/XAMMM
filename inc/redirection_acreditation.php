<?php
/*

Cette page permet d'envoyer un utilisateur connecté sur la bonne page de profil selon si il est administrateur ou non

*/
    
    session_start();
    //check the role of the personne ...
    if ($_SESSION['admin'] == 1){
        // ... redirection to admin index
        header('Location: ../admin/index_admin.php');
    }
    else if ($_SESSION['admin'] == 0){
        // ... redirection to index
        header('Location: ../user/index_user.php'); 
    }
?>