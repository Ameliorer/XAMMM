
<?php
    // Connection form for admin and user
    //Ask to connect by asking mail and password
    session_start(); //Start or retrieve the session already started
    include('../db/db_connect.php');
    include('../crud/crud_users.php');
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
</head>
<body>
<section>

            <div class="container">
                <div class="login">
                    <h1>Login</h1>
                    <form action="form_connection.php" method="post">

                    <label for="utilisateurMail">Mail de l'utilisateur : </label>
                    <input type="mail" placeholder="mail" name="utilisateurMail" id="utilisateurMail"/>

                    <label for="utilisateurPassword">mot de passe de l'utilisateur : </label>
                    <input type="password" placeholder="mot de passe" name="utilisateurPassword" id="utilisateurPassword"/>
                    
                    <input type="submit" value="Login">
                    </form>
                </div>
            </div>
            <p> Si vous n'avez pas encore de compte inscrivez vous ici : <a href="../inc/form_adhesion.php">Inscription</a></p>

<?php
// if a connexion id is set redirect to rediracion by aceditation
if(isset($_SESSION['id'])){
    header('Location: redirection_acreditation.php');
}
//else if connexion form complete 
else if(isset($_POST['utilisateurMail']) and isset($_POST['utilisateurPassword'])){
    
    //stock the infos 
    $login = $_POST['utilisateurMail'];
    $password = $_POST['utilisateurPassword'];

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
        header('Location: rediraction_acreditation.php');
    }

    else{
        //else indicate that someting is wrong
        echo "Login ou mot de passe incorrect";
    }
}

?>
</section>
</body>
