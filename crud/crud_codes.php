<?php
// ---  CRUDS codes   ---


/*
CreateCodes($conn, $code, $productId, $dateStart, $dateEnd)-> $return
    $conn : mysqli := Connection to the SQL database
    $code : string := PRIMARY KEY gift code
    $productId : string := FOREIGN KEY id of product promoted
    $dateStart : date := VALUE starting date of the validity of the gift code
    $dateEnd : date := VALUE ending date of the validity of the gift code

    $return : boolean := Indicate the status of the query
*/
function CreateCodes($conn, $code, $productId, $dateStart, $dateEnd){
    $query="INSERT INTO `codes` (`code`, `productId`, `dateStart`, `dateEnd`) VALUES ('$code', '$productId', '$dateStart', '$dateEnd')";
	$return=mysqli_query($conn, $query);
	return $return ;
}


/*
UpdateCodes($conn, $code, $productId, $dateStart, $dateEnd)-> $return
    $conn : mysqli := Connection to the SQL database
    $code : string := PRIMARY KEY gift code
    $type : string := FOREIGN KEY id of product promoted
    $deteDebut : date := VALUE starting date of the validity of the gift code
    $dateFin : date := VALUE ending date of the validity of the gift code

    $return : boolean := Indicate the status of the query
*/
function UpdateCodes($conn, $code, $productId, $dateStart, $dateEnd){
    $query="UPDATE `codes` SET `productId`='$productId', `dateStart`='$dateStart', `dateEnd`='$dateEnd' WHERE `code`='$code'";
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
    $query="DELETE FROM `codes` WHERE `code`='$code'" ;
	$return=mysqli_query($conn, $query) ;
	return $return;
}


/*
SelectImage($conn,$productId ) -> $return
    $conn : mysqli := Connection to the SQL database
    $productId : string := FOREIGN KEY id of product promoted
    

    $return : array | boolean | null := Contains the response or indicate a connection error
*/
function SelectCodes_type($conn, $productId){
    $query="SELECT * FROM `codes` WHERE `productId`='$productId'" ;
	if($response=mysqli_query($conn, $query)){
		$return=mysqli_fetch_assoc($response);
	} else {
        $return=false;
    }
	return $return;
}

function SelectAllCodes($conn){
    $query="SELECT * FROM `codes`" ;
    $table = [];
	if($response=mysqli_query($conn, $query)){
		while($row=mysqli_fetch_assoc($response)){
            $table []= $row;
        }
        $return = $table;
	} else {
        $return=false;
    }
	return $return;
}

?>