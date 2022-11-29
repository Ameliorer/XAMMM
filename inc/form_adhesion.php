<?php

$html_head = "<!DOCTYPE html>\n";
$html_head .= "<html>\n<head>\n";
$html_head .= "<meta charset='utf-8' />\n";
$html_head .= "<title>test crud</title>\n";
$html_head .= "</head>\n";
$html_head .= "<body>\n";

echo $html_head;
    // Page to create a new account user
    session_start(); //Start or retrieve the session already started
    include('verif_val.php');
    include('../db/db_connect.php');
    include('../crud/crud_users.php');

    if(isset($_SESSION['id'])){
        if($_SESSION['admin'] == 0){
            header('Location: ../user/index.php');
        }
        else{
            header('Location: ../admin/index.php');
        }
    }
    else{
        if ($verif){ //if everything is okay in the form
            
            if(CreateUser($conn, $_POST['utilisateurNom'], $_POST['utilisateurPrenom'], $_POST['utilisateurMail'], $_POST['utilisateurPassword'], $_POST['utilisateurNumTel'], $_POST['utilisateurTaille'], $_POST['utilisateurPoids'],$_POST['utilisateurAge'], 0)){
                echo("User is created and stocked in the DB");
            }
            else{
                echo("Creation of the User FAILED");
            }
            
        }
    }
 
?>
<section>
  <h1> Inscription</h1>
            <form action="" method="POST" name="utilisateurForm" id="utilisateurForm" class="form">


                <label for="utilisateurNom">Nom : </label>
                <input type="text" placeholder="nom" name="utilisateurNom" id="utilisateurNom"/>

                <label for="utilisateurPrenom">Prenom : </label>
                <input type="text" placeholder="prenom" name="utilisateurPrenom" id="utilisateurPrenom"/>

                <label for="utilisateurMail">Mail : </label>
                <input type="mail" placeholder="mail" name="utilisateurMail" id="utilisateurMail"/>

                <label for="utilisateurPassword">mot de passe : </label>
                <input type="password" placeholder="mot de passe" name="utilisateurPassword" id="utilisateurPassword"/>

                <label for="utilisateurNumTel">numero de telephone : </label>
                <input type="tel" placeholder="numero telephone" name="utilisateurNumTel" id="utilisateurNumTel"/>

                <label for="utilisateurTaille">Taille : </label>
                <input type="number" placeholder="taille" name="utilisateurTaille" id="utilisateurTaille"/>

                <label for="utilisateurPoids">Poids : </label>
                <input type="number" placeholder="poids" name="utilisateurPoids" id="utilisateurPoids"/>

                <label for="utilisateurAge">Age : </label>
                <input type="number" placeholder="age" name="utilisateurAge" id="utilisateurAge"/>

                <label for="utilisateurSubmit">valider : </label>
                <input type="submit" name="utilisateurSubmit" id="utilisateurSubmit">
            </form>

            <P> Veuillez choisir un mot de passe de plus de 9 caractères pour éviter les erreurs. </p>
</section>

