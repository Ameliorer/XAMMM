<?php
/*

Cette page permet de valider ou non le formualire d'inscription donné par l'utilisateur.

*/
    if(!isset($_POST)){
        $verif = false;
    }
    else {
        $error = array();
        if (isset($_POST['mail'])){
            if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
                $error[] = "Email invalide";
            }
        }
        else {
            $possibleR = true;
        }

        if (!isset($_POST['utilisateurNom']) and !isset($_POST['utilisateurPrenom']) and !isset($_POST['utilisateurMail']) and !isset($_POST['utilisateurPassword']) and !isset($_POST['utilisateurNumTel'])and !isset($_POST['utilisateurTaille']) and !isset($_POST['utilisateurPoids']) and !isset($_POST['utilisateurAge'])){
            $vide = true;
        }
        
        if (isset($_POST['utilisateurPassword'])){
            if (strlen($_POST['utilisateurPassword']) < 8){
                $error[] = "Mot de passe trop court";
            }
        }

        if (!isset($_POST['utilisateurNom'])){
            $error[] = " Nom manquant";
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

        if (!isset($_POST['utilisateurTaille']) and !isset($_POST['utilisateurPoids']) and !isset($_POST['utilisateurAge'])){
            $error[] = "Veuillez tout remplir";
        }



        if (count($error) > 0 and !$vide){
            echo "Erreurs :<br>";
            foreach ($error as $err){
                echo $err."<br>";
            };
        }
        else if ($vide){
            $verif = false;
        }
        else{
            echo "Formulaire valide";
            $verif = true;
        }
    }
?>