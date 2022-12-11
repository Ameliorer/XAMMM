<?php
// ---  CRUDS cart   ---


/*
Createcart($conn, $idUser, $idProduct, $dateReservation, $today)-> $return
    $conn : mysqli := Connection to the SQL database
    $code : string := FOREIGN KEY id of user adding to the cart
    $idProduct : string := FOREIGN KEY id of product added to the cart
    $dateReservation : date := VALUE starting date of the reservation
    $today : date := VALUE date when the added to the cart

    $return : boolean := Indicate the status of the query
*/
function Createcart($conn, $idUser, $idProduct, $dateReservation, $today){
    $query="INSERT INTO `cart` (`idUser`, `idProduct`, `dateReservation`, `today`) VALUES ('$idUser', '$idProduct', '$dateReservation', '$today')";
	$return=mysqli_query($conn, $query);
	return $return ;
}


/*
Updatecart($conn, $id, $dateReservation, $today)-> $return
    $conn : mysqli := Connection to the SQL database
    $id : string := PRIMARY KEY cart
    $dateReservation : date := VALUE VALUE starting date of the reservation
    $today : date := VALUE date when the added to the cart

    $return : boolean := Indicate the status of the query
*/
function Updatecart($conn, $id, $dateReservation, $today){
    $query="UPDATE `cart` SET `dateReservation`='$dateReservation', `today`='$today' WHERE `id`='$id'";
	$return=mysqli_query($conn, $query);
    return $return;
}


/*
Deletecart($conn, $id) -> $return
    $conn : mysqli := Connection to the SQL database
    $id : string := PRIMARY KEY cart

    $return : boolean := Indicate the status of the query
*/
function Deletecart($conn, $id){
    $query="DELETE FROM `cart` WHERE `id`='$id'" ;
	$return=mysqli_query($conn, $query) ;
	return $return;
}

/*
Deletcart_today($conn, $today) -> $return
    $conn : mysqli := Connection to the SQL database
    $today : date := VALUE date of last modification
    

    $return : boolean := Indicate the status of the query
*/
function Deletcart_today($conn, $today){
    $query="DELETE FROM `cart` WHERE `today`<'$today'" ;
	if($response=mysqli_query($conn, $query)){
		$return=mysqli_fetch_assoc($response);
	} else {
        $return=false;
    }
	return $return;
}

/*
Selectcart_user($conn, $idUser) -> $return
    $conn : mysqli := Connection to the SQL database
    $idUser : int := FOREIGN KEY id of current user
    

    $return : array | boolean | null := Contains the response or indicate a connection error
*/
function Selectcart_user($conn, $idUser){
    $query="SELECT * FROM `cart` WHERE `idUser`='$idUser'" ;
	if($response=mysqli_query($conn, $query)){
        $table = array();
		while($row=mysqli_fetch_assoc($response)){
            $table []= $row;
        }
        $return = $table;
	} else {
        $return=false;
    }
	return $return;
}

function SelectAllcart($conn){
    $query="SELECT * FROM `cart`" ;
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