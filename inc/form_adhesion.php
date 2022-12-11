
<?php
  
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
                echo("User is created and stocked in the DB");
            }
            else{
                echo("Creation of the User FAILED");
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