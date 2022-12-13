<?php
/*

Cette page permet à un utilisateur de se connecter à son compte précédament créé

inclue :
 - /~XAMMM/crud/crud_users.php
 - /~XAMMM/db/db_connect.php
 - /~XAMMM/pages/head.php

*/
    // Connection form for admin and user
    //Ask to connect by asking mail and password
    include('../db/db_connect.php');
    include('../crud/crud_users.php');

    include("../pages/head.php");
?>

<main>
<section>

    <div class="container">
        <div class="login">
            <h1>Login</h1>
            <form action="form_connection.php" method="post">
                <div class="form__group field">
                    <input type="mail" class="form__field" placeholder="mail" name="utilisateurMail" id="utilisateurMail"/>
                    <label class="form__label" for="utilisateurMail">Mail de l'utilisateur : </label>

                </div>

                
                <div class="form__group field">
                    <input type="password" class="form__field" placeholder="mot de passe" name="utilisateurPassword" id="utilisateurPassword" autocomplete="off"/>
                    <label class="form__label" for="utilisateurPassword">mot de passe de l'utilisateur : </label>

                </div>
                <input type="submit" class="envoyer" value="Login">
            </form>
        </div>
    </div>
    <p> Si vous n'avez pas encore de compte inscrivez vous ici : <a href="../inc/form_adhesion.php">Inscription</a></p>

<?php
$explode = (explode('~', $_SERVER['HTTP_REFERER']));
var_dump($explode);
$url = $explode[1];
$urlPlus = "/~$url";
if(!empty($explode[2])){
    $urlOffre =  "/~$explode[2]";
    $_SESSION["lastPage"] = $urlOffre;
}
else if ($urlPlus != $_SERVER['REQUEST_URI']){
    $_SESSION["lastPage"] = $urlPlus;
}


//else if connexion form complete 
if(isset($_POST['utilisateurMail']) and isset($_POST['utilisateurPassword'])){
    
    //stock the infos 
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

    //check that everything exist
    if($row){
        // we associate every infos to our session and go to rediraction page 

        $_SESSION['id'] = $row['id'];
        $_SESSION['lastName'] = $row['lastName'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['mail'] = $row['mail'];
        $_SESSION['phoneNum'] = $row['phoneNum'];
        $_SESSION['height'] = $row['height'];
        $_SESSION['weight'] = $row['weight'];
        $_SESSION['age'] = $row['age'];
        $_SESSION['admin'] = $row['admin'];
        header("Location: $_SESSION[lastPage]");
    }

    else{
        //else indicate that someting is wrong
        echo "Login ou mot de passe incorrect";
    }
}

?>
 </main>
 <?php 
//Troisieme balise PHP pour include le(s) fichier(s) du footer
//–––––––––––––––

//Include du footer
include("../pages/footer.html");

?>
