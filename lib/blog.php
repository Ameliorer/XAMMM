<?php
include("../db/db_connect.php");
include("../crud/crud_blog.php");

// intreagit avec la table Blog de la BDD

//blog
if(isset($_GET["blogId"])){
    $blogId = $_GET["blogId"];
}
if(isset($_GET["blogTitle"])){
    $blogTitle = $_GET["blogTitle"];
}
if(isset($_GET["blogContent"])){
    $blogContent = $_GET["blogContent"];
}
if(isset($_GET["blogDate"])){
    $blogDate = $_GET["blogDate"];
}
if(isset($_GET["blogAction"])){
    $blogAction = $_GET["blogAction"];
}
$retQuerry = array();

if(isset($blogAction)){
    if($blogAction == "select_all"){
        $query="SELECT * FROM `blog`" ;
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