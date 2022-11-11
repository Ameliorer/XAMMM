<?php
// ---  CRUDS codes   ---


/*
CreateCodes($conn, $code, $type, $deteDebut, $dateFin, $pourcentage) -> $return
    $conn : mysqli := Connection to the SQL database
    $code : string := PRIMARY KEY gift code
    $type : string := FOREIGN KEY id of product promoted
    $deteDebut : date := VALUE starting date of the validity of the gift code
    $dateFin : date := VALUE ending date of the validity of the gift code
    $pourcentage : number := VALUE percentage reduced from tyhe original price by the code

    $return : boolean := Indicate the status of the query
*/
function CreateCodes($conn, $code, $type, $deteDebut, $dateFin, $pourcentage){
    $query="INSERT INTO `codes` (`code`, `type`, `dateDebut`, `dateFin`, `pourcentage`) VALUES ('$code', '$type', '$deteDebut', '$dateFin', '$pourcentage')";
	$return=mysqli_query($conn, $query);
	return $return ;
}


/*
UpdateCodes($conn, $code, $type, $deteDebut, $dateFin, $pourcentage) -> $return
    $conn : mysqli := Connection to the SQL database
    $code : string := PRIMARY KEY gift code
    $type : string := FOREIGN KEY id of product promoted
    $deteDebut : date := VALUE starting date of the validity of the gift code
    $dateFin : date := VALUE ending date of the validity of the gift code
    $pourcentage : number := VALUE percentage reduced from tyhe original price by the code

    $return : boolean := Indicate the status of the query
*/
function UpdateCodes($conn, $code, $type, $deteDebut, $dateFin, $pourcentage){
    $query="UPDATE `codes` set `type`='$type', `deteDebut`='$deteDebut', `dateFin`='$dateFin', `pourcentage`='$pourcentage',  WHERE `code`='$code'";
	$return=mysqli_query($conn, $query);
    return $return;
}


/*
DeleteCodes($conn, $code) -> $return
    $conn : mysqli := Connection to the SQL database
    $code : string := PRIMARY KEY gift code

    $return : boolean := Indicate the status of the query
*/
function DeleteCodes($conn, $code){
    $query="DELETE FROM `codes` WHERE `code`=$code" ;
	$return=mysqli_query($conn, $query) ;
	return $return;
}


/*
SelectImage($conn, ) -> $return
    $conn : mysqli := Connection to the SQL database
    $type : string := FOREIGN KEY id of product promoted
    

    $return : array | boolean | null := Contains the response or indicate a connection error
*/
function SelectCodes_type($conn, $type){
    $query="SELECT * FROM `codes` WHERE `type`=$type" ;
	if($response=mysqli_query($conn, $query)){
		$return=mysqli_fetch_assoc($response);
	} else {
        $return=false;
    }
	return $return;
}

?>