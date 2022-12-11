<?php
include("../db/db_connect.php");
include("../crud/crud_cart.php");
include("../crud/crud_users.php");
include("../crud/crud_products.php");

if($_POST['action'] == "addToCart"){
    $product = SelectProduit($conn, $_POST['nameProduct']);
    $user = SelectUser($conn, $_POST['idUser']);
    $crC = Createcart($conn, $_POST['idUser'], $product['id'], $_POST['dateReservation'], $_POST['today']);
    $upU = UpdateUser($conn, $_POST['idUser'], $user['lastName'], $user['firstname'], $user['mail'], $user['password'], $user['phoneNum'], $_POST['tailleUser'], $_POST['poidsUser'], $_POST['ageUser'], $user['admin']);
}
?>