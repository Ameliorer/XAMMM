<?php
include("../db/db_connect.php");
include("../crud/crud_cart.php");
include("../crud/crud_products.php");
include("../crud/crud_users.php");


$array = array();
$idUser = $_GET['id'];

$catrUser = Selectcart_user($conn, $idUser);
if($catrUser == false){
    echo("No products in Cart");
}
else{
    for($i = 0; $i < count($catrUser); $i++){
        $data = array();
        $prod = SelectProduit_id($conn, $catrUser[$i]['idProduct']);
        $user = SelectUser($conn, $catrUser[$i]['idUser']);
        array_push($data, $catrUser[$i]);
        array_push($data, $prod);
        array_push($data, $user);
        array_push($array, $data);
    }
}
echo json_encode($array);

?>