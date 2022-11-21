<?php
include("../db/db_connect.php");
include("../crud/crud_opinion.php");

$retQuerry = array();

if(isset($_GET["opinionAction"])){
    $opinionAction = $_GET["opinionAction"];
}

if(isset($opinionAction)){
    if($opinionAction == "select_all"){
        $query="SELECT * FROM `opinion`" ;
        if($response=mysqli_query($conn, $query)){
            while ($row = mysqli_fetch_assoc($response)) {
                array_push($retQuerry, $row);
            }
        } else {
            $return=false;
        }
    };
    if($opinionAction == "select_5star"){
        $query="SELECT * FROM `opinion` where `grade`=5 " ;
        if($response=mysqli_query($conn, $query)){
            while ($row = mysqli_fetch_assoc($response)) {
                array_push($retQuerry, $row);
            }
        } else {
            $return=false;
        }
    };
    if($opinionAction == "select_4star"){
        $query="SELECT * FROM `opinion` where `grade`=4 " ;
        if($response=mysqli_query($conn, $query)){
            while ($row = mysqli_fetch_assoc($response)) {
                array_push($retQuerry, $row);
            }
        } else {
            $return=false;
        }
    };
    if($opinionAction == "select_3star"){
        $query="SELECT * FROM `opinion` where `grade`=3 " ;
        if($response=mysqli_query($conn, $query)){
            while ($row = mysqli_fetch_assoc($response)) {
                array_push($retQuerry, $row);
            }
        } else {
            $return=false;
        }
    };
    if($opinionAction == "select_2star"){
        $query="SELECT * FROM `opinion` where `grade`=2 " ;
        if($response=mysqli_query($conn, $query)){
            while ($row = mysqli_fetch_assoc($response)) {
                array_push($retQuerry, $row);
            }
        } else {
            $return=false;
        }
    };
    if($opinionAction == "select_1star"){
        $query="SELECT * FROM `opinion` where `grade`=1 " ;
        if($response=mysqli_query($conn, $query)){
            while ($row = mysqli_fetch_assoc($response)) {
                array_push($retQuerry, $row);
            }
        } else {
            $return=false;
        }
    };
};




echo json_encode($retQuerry);

include("../db/db_disconnect.php");