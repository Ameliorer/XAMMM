<?php

include("/~XAMMM/db/db_connect.php");
include("/~XAMMM/crud/crud_users.php");

$retQuerry = array();

if(isset($_GET["iduser"])){
    $iduser = $_GET["iduser"];
}

if(isset($iduser)){
    $query="SELECT * FROM `users`WHERE `id` = '$iduser'  " ;
    if($response=mysqli_query($conn, $query)){
        while ($row = mysqli_fetch_assoc($response)) {
            array_push($retQuerry, $row);
        }
    } else {
        $return=false;
    }
};

echo json_encode($retQuerry);

include("/~XAMMM/db/db_disconnect.php");