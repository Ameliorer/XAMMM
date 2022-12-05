<?php 

include("../db/db_connect.php");
include("../crud/crud_reservations.php");

$id = $_GET["id"];

$sql = "DELETE FROM `reservations` WHERE `id`='$id'";
$return = mysqli_query($conn,$sql);



?>