<?php
/*---------------------------------------
CRUD images
---------------------------------------*/

/*
CreateImage($conn, $nom, $idblog) -> $return
    $conn : mysqli := Connection to the SQL database
    $nom : string := PRIMARY KEY Name of the image file
    $idblog : string := FOREIGN KEY id of the blog associated

    $return : boolean := Indicate the status of the query
*/
function CreateImage($conn, $nom, $idblog){
	$query="INSERT INTO `images` (`nom`, `idblog`) VALUES ('$nom', '$idblog')";
	$return=mysqli_query($conn, $query);
	return $return ;
}

/*
UpdateImage($conn, $nom, $idblog) -> $return
    $conn : mysqli := Connection to the SQL database
    $nom : string := PRIMARY KEY Name of the image file
    $idblog : string := FOREIGN KEY id of the blog associated

    $return : boolean := Indicate the status of the query
*/
function UpdateImage($conn, $nom, $idblog){
	$query="UPDATE `images` set `idblog`='$idblog' WHERE `nom`='$nom'";
	$return=mysqli_query($conn, $query);
    return $return;
}

/*
DeleteImage($conn, $nom) -> $return
    $conn : mysqli := Connection to the SQL database
    $nom : string := PRIMARY KEY Name of the image file

    $return : boolean := Indicate the status of the query
*/
function DeleteImage($conn, $nom){
	$query="DELETE FROM `images` WHERE `nom`=$nom" ;
	$return=mysqli_query($conn, $query) ;
	return $return;
}

/*
SelectImage($conn, $nom) -> $return
    $conn : mysqli := Connection to the SQL database
    $nom : string := PRIMARY KEY Name of the image file

    $return : array | boolean | null := Contains the response or indicate a connection error
*/
function SelectImage($conn, $nom){
	$query="SELECT * FROM `images` WHERE `nom`=$nom" ;
	if($response=mysqli_query($conn, $query)){
		$return=mysqli_fetch_assoc($response);
	} else {
        $return=false;
    }
	return $return;
}
?>