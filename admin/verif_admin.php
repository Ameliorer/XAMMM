<?php
/*
cette page redirige vers l'index si l'utilisateur n'est pas connecté ou n'est pas un administrateur.

est utilisé :
 - /~XAMMM/admin/verif_admin.php

*/
    //permet de récupérer et annalyser les paramètres de session.
    session_start();
    //si il existe une session
    if(isset($_SESSION)){
        //et que cette session possède une acreditation de rang 0
        if($_SESSION['admin']==0){
            //renvoie sur la page de connexion
            header('Location: ../inc/form_connection.php');
        }
        else if ($_SESSION == []){
            header('Location: ../inc/form_connection.php');
        }
    }
    //sinon renvoie sur la page de connexion
    else{
        header('Location: ../inc/form_connection.php');
    }
