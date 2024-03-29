<?php
/*

Cette page permet de checker si le formulaire d'inscription est correctement remplie

*/


    if(isset($_POST)) {
        $error = array();

        /* verif l'intrgralité du mail */ 
        if (isset($_POST['mail'])){
            if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
                $error[] = "Email invalide";
            }
        }

        if (isset($_POST['utilisateurMail'])){
            $mailForQuery = $_POST['utilisateurMail'];
            $query="SELECT `mail` FROM `users` WHERE `mail`='$mailForQuery';";
            if(($response=mysqli_query($conn, $query))){ 
                $error[] = "Cette adresse mail est déjà utilisée";
            }
        } 

        
        /*Gestion mdp trop court*/
        if (isset($_POST['utilisateurPassword'])){
            if (strlen($_POST['utilisateurPassword']) < 8){
                $error[] = "Mot de passe trop court";
            }
        }

        /* Verif les manquants*/

        if (!isset($_POST['utilisateurNom'])){
            $error[] = "Nom manquant";
        }

        if (!isset($_POST['utilisateurPrenom'])){
            $error[] = "Prénom manquant";
        }

        if (!isset($_POST['utilisateurMail'])){
            $error[] = "Email manquante";
        }

        if (!isset($_POST['utilisateurPassword'])){
            $error[] = "Mot de passe manquant";
        }

        if (!isset($_POST['utilisateurNumTel'])){
            $error[] = "Telephone manquant";
        }

        if (!isset($_POST['utilisateurTaille']) or !isset($_POST['utilisateurPoids']) or !isset($_POST['utilisateurAge'])){
            $error[] = "Veuillez tout remplir";
        }

        


        if (count($error) > 0){
           /* echo "Erreurs :<br>";
            foreach ($error as $err){
                echo $err."<br>";
            };*/
            $verif = false;
        }
        else{
            /*echo "Formulaire valide";*/
            $verif = true;
        }
    } else {
        $verif = false;
    }

    
?>