<?php
include("../db/db_connect.php");
include("../crud/crud_cart.php");
include("../crud/crud_users.php");
include("../crud/crud_products.php");
include("../crud/crud_reservations.php");

$today = date('Y-m-d');
Deletcart_today($conn, $today);

if($_POST['action'] == "addToCart"){
    $product = SelectProduit($conn, $_POST['nameProduct']);
    $user = SelectUser($conn, $_POST['idUser']);
    $upU = UpdateUser($conn, $_POST['idUser'], $user['lastName'], $user['firstname'], $user['mail'], $user['password'], $user['phoneNum'], $_POST['tailleUser'], $_POST['poidsUser'], $_POST['ageUser'], $user['admin']);
    $heightCheck = ($_POST['tailleUser'] <= $product['maxHeight']) && ($_POST['tailleUser'] >= $product['minHeight']);
    $weightCheck = ($_POST['poidsUser'] <= $product['maxWeight']) && ($_POST['poidsUser'] >= $product['minWeight']);
    $ageCheck = ($_POST['ageUser'] <= $product['maxAge']) && ($_POST['ageUser'] >= $product['minAge']);
    if($heightCheck && $weightCheck && $ageCheck){
        $crC = Createcart($conn, $_POST['idUser'], $product['id'], $_POST['dateReservation'], $_POST['today']);
        echo "OK";
    }else{
        if(!($heightCheck)){
            echo "height";
        }else{
            if(!($weightCheck)){
                echo "weight";
            }else{
                echo "age";
            }
        }
    }
}

if($_POST['action'] == "retirer"){
    Deletecart($conn, $_POST['id']);
}

if($_POST['action'] == "modifier"){
    $today = date('Y-m-d');
    $user = SelectUser($conn, $_POST['idUser']);
    $upC = Updatecart($conn, $_POST['idC'], $_POST['date'], $today);
    $upU = UpdateUser($conn, $_POST['idUser'], $user['lastName'], $user['firstname'], $user['mail'], $user['password'], $user['phoneNum'], $_POST['height'], $_POST['weight'], $_POST['age'], $user['admin']);
}

if($_POST['action'] == "confirmer"){
    $user = SelectUser($conn, $_POST['idUser']);
    $fullCart = Selectcart_user($conn, $_POST["idUser"]);
    foreach($fullCart as $cart){
        CreateReservation($conn, $_POST["idUser"], $user["weight"], $user["height"], $user["age"], $cart["idProduct"], $cart["dateReservation"]);
        Deletecart($conn, $cart['id']);
    }
}
?>