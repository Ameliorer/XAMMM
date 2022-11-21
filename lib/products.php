<?php 
include("../db/db_connect.php");
include("../crud/crud_products.php");


$array = array();

$productsInDB = SelectAllProduit($conn);
if($productsInDB == false){
    echo("No products in database ?");
}
else{
    for($i = 0; $i < count($productsInDB); $i++){
        array_push($array, $productsInDB[$i]);
    }
}
echo json_encode($array);

?>