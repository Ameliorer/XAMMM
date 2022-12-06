<?php 

include("../db/db_connect.php");
include("../crud/crud_images.php");

$imageName = $_GET["imageName"];

DeleteImage($conn, $imageName);

?>