<?php
/*---------------------------------------
CRUD blog
---------------------------------------*/

/*
CreateBlog($conn, $title, $content, $datePost) -> $return
    $conn : mysqli := Connection to the SQL database

    $title : string := VALUE post's title,
    $content: string := VALUE post's content,
    $datePost : string := VALUE post's date,

    $return : boolean := Indicate the status of the query
*/
function CreateBlog($conn, $title, $content, $datePost){
    $query="INSERT INTO `blog` (`title`, `content`, `datePost`) VALUES ('$title', '$content', '$datePost')";
    $return=mysqli_query($conn, $query);
    return $return ;
}

/*
UpdateUser($conn, $id, $title, $content, $datePost) -> $return
    $conn : mysqli := Connection to the SQL database

    $id : int := PRIMARY KEY post's unique id,
    $title : string := VALUE post's title,
    $content: string := VALUE post's content,
    $datePost : string := VALUE post's date,

    $return : boolean := Indicate the status of the query
*/
function UpdateBlog($conn,$id, $title, $content, $datePost){
    $query="UPDATE `blog` SET `title`= '$title', `content`= '$content', `datePost`= '$datePost' WHERE `id`='$id' ";
    $return=mysqli_query($conn, $query);
    return $return;
}

/*
DeleteBlog($conn, $id) -> $return
    $conn : mysqli := Connection to the SQL database

    $id : int := PRIMARY KEY post's unique id,

    $return : boolean := Indicate the status of the query
*/
function DeleteBlog($conn, $id){
    $query="DELETE FROM `blog` WHERE `id` = '$id' " ;
    $return=mysqli_query($conn, $query) ;
    return $return;
}

/*
SelectBlog() -> $return
    $conn : mysqli := Connection to the SQL database

    $id : int := PRIMARY KEY post's unique id,

    $return : array | boolean | null := Contains the response or indicate a connection error
*/
function SelectBlog($conn, $id){
    $query="SELECT * FROM `blog` WHERE `id`='$id' " ;
    if($response=mysqli_query($conn, $query)){
        $return=mysqli_fetch_assoc($response);
    } else {
        $return=false;
    }
    return $return;
}

function SelectAllBlog($conn){
    $query="SELECT * FROM `blog`" ;
    $table = [];
    if($response=mysqli_query($conn, $query)){
        while($row=mysqli_fetch_assoc($response)){
            $table[]=$row;
        }
        $return = $table;
    } else {
        $return=false;
    }
    return $return;
}

?>