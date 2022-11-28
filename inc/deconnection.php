

<?php
    // Connection form for admin and user
    //Ask to connect by asking mail and password
    session_start(); //Start or retrieve the session already started
    include('../db/db_connect.php');
    include('../crud/crud_users.php');
    $_SESSION = array();
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
</head>
<body>
<section>
Vous etes deconnecté.

<a href='../index.php'>Retour accueil</a>
</section>
</body>