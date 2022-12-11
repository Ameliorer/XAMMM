<?php 

include("../db/db_connect.php");
include("../crud/crud_products.php");
include("../crud/crud_reservations.php");

$productName = $_GET["name"];
$id = SelectProduit($conn, $productName)['id'];

$query = "SELECT * FROM `reservations` WHERE `productId`= $id";
$table = [];
if($response=mysqli_query($conn, $query)){
    while($row=mysqli_fetch_assoc($response)){
        $table []= $row;
    }
}

echo (json_encode(count($table)));


?>