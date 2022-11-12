<?php 
// --- CRUD reservation ---


/* CreateReservation($conn,$idUser,$tailleUser,$ageUser,$idProduit,$date) -> $return
    $conn : mysqli := Connection to the SQL database
    $idUser : integer := VALUE to connect the reservation with the good user
    $tailleUser : integer := VALUE the height of the user
    $ageUser : integer := VALUE the age of the user
    $idProduit : integer := VALUE to connect the reservation with the good product
    $date : date := VALUE date of the reservation

    $return : boolean := Indicate the status of the query
*/ 
function CreateReservation($conn,$idUser,$tailleUser,$ageUser,$idProduit,$date){
    $sql = "INSERT INTO `reservations` (`idUser`, `tailleUser`, `ageUser`, `idProduit`,`date`) VALUES ('$idUser', '$tailleUser', '$ageUser', '$idProduit', '$date')";
    echo($sql);
    $return = mysqli_query($conn, $sql);
    echo("<br><br>");
    echo("The return is : $return");
    echo("<br><br>");
    return $return;
}


/* UpdateReservation($conn,$idUser,$tailleUser,$ageUser,$idProduit,$date) -> $return
    $conn : mysqli := Connection to the SQL database
    $idUser : integer := VALUE to connect the reservation with the good user
    $tailleUser : integer := VALUE the height of the user
    $ageUser : integer := VALUE the age of the user
    $idProduit : integer := VALUE to connect the reservation with the good product
    $date : date := VALUE date of the reservation

    $return : boolean := Indicate the status of the query
*/
function UpdateReservation($conn,$idUser,$tailleUser,$ageUser,$idProduit,$date){
    $sql = "UPDATE `reservations` SET `tailleUser` ='$tailleUser', `ageUser` ='$ageUser', `idProduit` = $idProduit, `date` ='$date' WHERE `idUser` = '$idUser'";
    $return = mysqli_query($conn, $sql);

    return $return;
}
/* DeleteReservation($conn,$idUser,$tailleUser,$ageUser,$idProduit,$date) -> $return
    $conn : mysqli := Connection to the SQL database
    $idUser : integer := VALUE to connect the reservation with the good user

    $return : boolean := Indicate the status of the query
*/
function DeleteReservation($conn,$idUser){
    $sql = "DELETE FROM `reservations` WHERE `idUser`='$idUser'";
    $return = mysqli_query($conn,$sql);

    return $return;
}
/* SelectReservation($conn,$idUser,$tailleUser,$ageUser,$idProduit,$date) -> $return
    $conn : mysqli := Connection to the SQL database
    $idUser : integer := VALUE to connect the reservation with the good user

    $return : array or boolean or null := Indicate the status of the query
*/
function SelectReservation($conn,$idUser){
    $sql="SELECT * FROM `reservations` WHERE `idUser`='$idUser'" ;
	if($response=mysqli_query($conn, $sql)){
		$return=mysqli_fetch_assoc($response);
	} else {
        $return=false;
    }
	return $return;
}


?>