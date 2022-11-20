<?php
/*---------------------------------------
CRUD opinion
---------------------------------------*/

/*
CreateOpinion($conn, $name, $idblog) -> $return
    $conn : mysqli := Connection to the SQL database
    $iduser : int :=  id of the user posting his opinion
    $text: string := the text describing their opinion
    $grade : int := the grade attributed to the opinion
    $return : boolean := Indicate the status of the query
*/
function CreateOpinion($conn, $iduser, $text, $grade){
    $query = "INSERT INTO `opinion`( `iduser`, `text`, `grade`) VALUES ('$iduser','$text','$grade')";
	$return = mysqli_query($conn, $query);
	return $return ;
}

/*
UpdateOpinion($conn, $name, $idblog) -> $return

    $conn : mysqli := Connection to the SQL database
    $id: string := FOREIGN KEY id of the opinion associated
    $iduser : int :=  id of the user posting his opinion
    $text : string := the text describing their opinion
    $grade : int := the grade attributed to the opinion
    $return : boolean := Indicate the status of the query
*/
function UpdateOpinion($conn, $id, $iduser, $text, $grade){
	$query = "UPDATE `opinion` set `iduser`='$iduser', `text`='$text', `grade`='$grade' WHERE `id`='$id'";
	$return = mysqli_query($conn, $query);
    return $return;
}

/*
DeleteImage($conn, $name) -> $return
    $conn : mysqli := Connection to the SQL database
    $iduser : int :=  id of the user posting his opinion
    
    $return : boolean := Indicate the status of the query
*/
function DeleteOpinion($conn, $iduser){
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
function SelectOpinion($conn, $iduser){
	$query = "SELECT * FROM `opinion` WHERE `iduser`=$iduser";
	if($response = mysqli_query($conn, $query)){
		$return = mysqli_fetch_assoc($response);
	} else {
        $return = false;
    }
	return $return;
}
?>