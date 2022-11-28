<?php
include("../db/db_connect.php");
include("../crud/crud_reservations.php");


if(isset($_GET["reservationsAction"])){
    $reservationsAction = $_GET["reservationsAction"];
}

if(isset($_GET["date"])){
    $date = $_GET["date"];
    //echo $date;
}

$retQuerry = array();

if(isset($reservationsAction)){
    if($reservationsAction == "select_date"){
        $query="SELECT * FROM `reservations` WHERE `date`= '$date' ;" ;
        if($response=mysqli_query($conn, $query)){
            while ($row = mysqli_fetch_assoc($response)) {
                array_push($retQuerry, $row);
            }
        } else {
            $return = false;
        }
    };
};




echo json_encode($retQuerry);

include("../db/db_disconnect.php");