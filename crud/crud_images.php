<?php
/*---------------------------------------
CRUD images
---------------------------------------*/

/*
CreateImage($conn, $name, $idblog) -> $return
    $conn : mysqli := Connection to the SQL database
    $name : string := PRIMARY KEY Name of the image file
    $idblog : string := FOREIGN KEY id of the blog associated

    $return : boolean := Indicate the status of the query
*/
function CreateImage($conn, $name, $idblog){
	$query = "INSERT INTO `images` (`name`, `idblog`) VALUES ('$name', '$idblog')";
	$return = mysqli_query($conn, $query);
	return $return ;
}

/*
UpdateImage($conn, $name, $idblog) -> $return
    $conn : mysqli := Connection to the SQL database
    $name : string := PRIMARY KEY Name of the image file
    $idblog : string := FOREIGN KEY id of the blog associated

    $return : boolean := Indicate the status of the query
*/
function UpdateImage($conn, $name, $idblog){
	$query = "UPDATE `images` set `idblog`='$idblog' WHERE `name`='$name'";
	$return = mysqli_query($conn, $query);
    return $return;
}

/*
DeleteImage($conn, $name) -> $return
    $conn : mysqli := Connection to the SQL database
    $name : string := PRIMARY KEY Name of the image file

    $return : boolean := Indicate the status of the query
*/
function DeleteImage($conn, $name){
	$query = "DELETE FROM `images` WHERE `name` = '$name'";
	$return = mysqli_query($conn, $query) ;
	return $return;
}

/*
SelectImage($conn, $name) -> $return
    $conn : mysqli := Connection to the SQL database
    $name : string := PRIMARY KEY Name of the image file

    $return : array | boolean | null := Contains the response or indicate a connection error
*/
function SelectImage($conn, $name){
	$query = "SELECT * FROM `images` WHERE `name`='$name'";
	if($response = mysqli_query($conn, $query)){
		$return = mysqli_fetch_assoc($response);
	} else {
        $return = false;
    }
	return $return;
}

function SelectAllImages($conn){
	$query = "SELECT * FROM `images`";
    $table = [];
	if($response = mysqli_query($conn, $query)){
        while($row = mysqli_fetch_assoc($response)){
            $table []= $row;
        }
		$return = $table;
	} else {
        $return = false;
    }
	return $return;
}

?>