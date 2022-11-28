<?php 
include("../db/db_connect.php");
include("../crud/crud_codes.php");


$array = array();

$codesInDB = SelectAllCodes($conn);
if($codesInDB == false){
    echo("No codes in database ?");
}
else{
    for($i = 0; $i < count($codesInDB); $i++){
        array_push($array, $codesInDB[$i]);
    }
}
echo json_encode($array);

?>