<?php 

include("../db/db_connect.php");
include("../crud/crud_users.php");
include("../crud/crud_reservations.php");


$table = [];

$id = $_GET["id"];
$user_infos = SelectUser($conn, $id);
$table []= $user_infos;

$user_reservations = [];
$sql="SELECT * FROM `reservations` WHERE `userId`='$id'" ;
if($response=mysqli_query($conn, $sql)){
    while($row=mysqli_fetch_assoc($response)){
        $user_reservations []= $row;

    }
}

$table []= $user_reservations;

echo(json_encode($table));







?>