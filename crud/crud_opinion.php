<?php
/*---------------------------------------
CRUD opinion
---------------------------------------*/

/*
CreateOpinion($conn, $name, $idblog) -> $return
    $conn : mysqli := Connection to the SQL database
    $iduser : int :=  id of the user posting his opinion
    $texte : string := the text describing their opinion
    $grade : int := the grade attributed to the opinion
    $return : boolean := Indicate the status of the query
*/
function CreateOpinion($conn, $iduser, $texte, $grade){
    $query = "INSERT INTO `opinion`( `iduser`, `texte`, `grade`) VALUES ('$iduser','$texte','$grade')"
	$return = mysqli_query($conn, $query);
	return $return ;
}

/*
UpdateOpinion($conn, $name, $idblog) -> $return

    $conn : mysqli := Connection to the SQL database
    $id: string := FOREIGN KEY id of the opinion associated
    $iduser : int :=  id of the user posting his opinion
    $texte : string := the text describing their opinion
    $grade : int := the grade attributed to the opinion
    $return : boolean := Indicate the status of the query
*/
function UpdateOpinion($conn, $id, $iduser, $texte, $grade){
	$query = "UPDATE `opinion` set `iduser`='$iduser', `texte`='$texte', `grade`='$grade' WHERE `id`='$id'";
	$return = mysqli_query($conn, $query);
    return $return;
}

/*
DeleteImage($conn, $name) -> $return
    $conn : mysqli := Connection to the SQL database
    $iduser : int :=  id of the user posting his opinion
    
    $return : boolean := Indicate the status of the query
*/
function DeleteImage($conn, $id){
	$query = "DELETE FROM `opinion` WHERE `iduser` = '$iduser'";
	$return = mysqli_query($conn, $query) ;
	return $return;
}

/*
SelectImage($conn, $name) -> $return
    $conn : mysqli := Connection to the SQL database
    $iduser : int :=  id of the user posting his opinion

    $return : array | boolean | null := Contains the response or indicate a connection error
*/
function SelectImage($conn, $iduser){
	$query = "SELECT * FROM `opinion` WHERE `iduser`=$iduser";
	if($response = mysqli_query($conn, $query)){
		$return = mysqli_fetch_assoc($response);
	} else {
        $return = false;
    }
	return $return;
}
?>