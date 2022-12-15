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


        if (count($error) > 0){
            echo "Erreurs :<br>";
            foreach ($error as $err){
                echo $err."<br>";
            };
            $verif = false;
        }
        else{
            $verif = true;
        }
    } else {
        $verif = false;
    }

    
?>