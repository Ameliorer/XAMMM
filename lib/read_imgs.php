<?php 

include("../db/db_connect.php");
include("../crud/crud_images.php");

header("Content-type: application/json");
$itsForBlog = filter_var($_GET['itsForBlog'], FILTER_VALIDATE_BOOLEAN);
$idBlog = intval($_GET["idBlog"]);

if($itsForBlog){
    if($imagesBlog = SelectImage($conn, $idBlog)){
        echo json_encode($imagesBlog);
    }
    else{
        echo("Selection of the images for the blog | $idblog | FAILED");
    }
}
else{
    if($images = SelectAllImages($conn)){
        echo json_encode($images);
    }
    else{
        echo("Selection FAILED");
    }
}
?>