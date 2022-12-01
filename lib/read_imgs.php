<?php 

include("../db/db_connect.php");
include("../crud/crud_images.php");

header("Content-type: application/json");

if($images = SelectAllImages($conn)){
    echo json_encode($images);
}
else{
    echo("Selection FAILED");
}
?>