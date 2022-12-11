<?php
include("../db/db_connect.php");
include("../crud/crud_cart.php");
include("../crud/crud_user.php");
include("../crud/crud_product.php");

$test = array("test");
array_push($test, "ping1");

if($_POST['action'] == "addToCart"){
    array_push($test, "ping2");
    $product = SelectProduit($conn, $_POST['nameProduct']);
    array_push($test, $product);
    $user = SelectUser($conn, $_POST['idUser']);
    array_push($test, $user);
    $crC = Createcart($conn, $_POST['idUser'], $product['id'], $_POST['dateReservation'], $_POST['today']);
    array_push($test, $crC);
    $upU = UpdateUser($conn, $_POST['idUser'], $user['lastName'], $user['firstName'], $user['mail'], $user['password'], $user['phoneNum'], $_POST['tailleUser'], $_POST['poidsUser'], $_POST['ageUser'], $user['admin']);
    array_push($test, $upU);
}

echo var_dump($test);
?>