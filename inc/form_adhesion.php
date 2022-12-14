<?php
/*

Cette page permet à un utilisateur de s'inscrire sur le site

inclue :
 - /~XAMMM/crud/crud_users.php
 - /~XAMMM/db/db_connect.php
 - /~XAMMM/inc/verif_val.php
 - /~XAMMM/pages/head.php
 - /~XAMMM/pages/footer.html

*/
    // Page to create a new account user
    include("../pages/head.php");
    include('verif_val.php');
    include('../db/db_connect.php');
    include('../crud/crud_users.php');

    if(isset($_SESSION['id'])){
        if($_SESSION['admin'] == 0){
            header('Location: ../user/index_user.php');
        }
        else{
            header('Location: ../admin/index_admin.php');
        }
    }
    else{
        if ($verif){ //if everything is okay in the form
            
            if(CreateUser($conn, $_POST['utilisateurNom'], $_POST['utilisateurPrenom'], $_POST['utilisateurMail'],md5( $_POST['utilisateurPassword']), $_POST['utilisateurNumTel'], $_POST['utilisateurTaille'], $_POST['utilisateurPoids'],$_POST['utilisateurAge'], 0)){
                echo("Votre compte est crée !");
                $login = $_POST['utilisateurMail'];
                $password = md5($_POST['utilisateurPassword']);

                //look for the user in the db
                $sql = "SELECT * FROM  `users` WHERE `mail`='$login' AND `password`='$password'";
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    echo "Erreur de requête SQL: ".mysqli_error($link);
                exit();
                }

                $row = mysqli_fetch_assoc($result);

                $_SESSION['id'] = $row['id'];
                $_SESSION['lastName'] = $row['lastName'];
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['mail'] = $row['mail'];
                $_SESSION['phoneNum'] = $row['phoneNum'];
                $_SESSION['height'] = $row['height'];
                $_SESSION['weight'] = $row['weight'];
                $_SESSION['age'] = $row['age'];
                $_SESSION['admin'] = $row['admin'];
                header('Location: redirection_acreditation.php');
            }
        }
    }
 
?>
<main>
<section>
  <h1> Inscription</h1>
            <form action="" method="POST" name="utilisateurForm" id="utilisateurForm" >

                <div class="form__group field">
                    <input type="text" class="form__field" placeholder="nom" name="utilisateurNom" id="utilisateurNom"/>
                    <label class="form__label" for="utilisateurNom">Nom : </label>

                </div>
                <div class="form__group field">
                    <input type="text" class="form__field" placeholder="prenom" name="utilisateurPrenom" id="utilisateurPrenom"/>
                    <label class="form__label" for="utilisateurPrenom">Prenom : </label>

                </div>
                
                <div class="form__group field">
                    <input type="mail" class="form__field" placeholder="mail" name="utilisateurMail" id="utilisateurMail"/>
                    <label class="form__label" for="utilisateurMail">Mail : </label>

                </div>

                <div class="form__group field">
                    <input type="password" class="form__field" placeholder="mot de passe" name="utilisateurPassword" id="utilisateurPassword"/>
                    <label class="form__label" for="utilisateurPassword">mot de passe : </label>

                </div>

                <div class="form__group field">
                    <input type="tel" class="form__field" placeholder="numero telephone" name="utilisateurNumTel" id="utilisateurNumTel"/>
                    <label class="form__label" for="utilisateurNumTel">Telephone : </label>
                </div>

                <div class="form__group field">
                    <input type="number" class="form__field" placeholder="taille" name="utilisateurTaille" id="utilisateurTaille"/>
                    <label class="form__label" for="utilisateurTaille">Taille : </label>
                </div>

                <div class="form__group field">
                    <input type="number" class="form__field" placeholder="poids" name="utilisateurPoids" id="utilisateurPoids"/>
                    <label class="form__label" for="utilisateurPoids">Poids : </label>

                </div>

                <div class="form__group field">
                    <input type="number" class="form__field" placeholder="age" name="utilisateurAge" id="utilisateurAge"/>
                    <label class="form__label" for="utilisateurAge">Age : </label>

                </div>
                    <input type="submit" class="envoyer" name="utilisateurSubmit" id="utilisateurSubmit">
                   

            </form>

            <P> Veuillez choisir un mot de passe de plus de 9 caractères pour éviter les erreurs. </p>
</section>
</main>
<?php 
//Troisieme balise PHP pour include le(s) fichier(s) du footer
//–––––––––––––––

//Include du footer
include("../pages/footer.html");

?>