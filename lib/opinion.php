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
    } else {
        $opinionAction = (int) $opinionAction;
        $query="SELECT * FROM `opinion` where `grade`=$opinionAction " ;
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