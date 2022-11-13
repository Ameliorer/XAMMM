<?php 
// --- CRUD reservation ---


/* CreateReservation($conn,$userId,$userHeight,$userAge,$productId,$date) -> $return
    $conn : mysqli := Connection to the SQL database
    $userId : integer := VALUE to connect the reservation with the good user
    $userHeight : integer := VALUE the height of the user
    $userAge : integer := VALUE the age of the user
    $productId : integer := VALUE to connect the reservation with the good product
    $date : date := VALUE date of the reservation

    $return : boolean := Indicate the status of the query
*/ 
function CreateReservation($conn,$userId,$userHeight,$userAge,$productId,$date){
    $sql = "INSERT INTO `reservations` (`userId`, `userHeight`, `userAge`, `productId`,`date`) VALUES ('$userId', '$userHeight', '$userAge', '$productId', '$date')";
    $return = mysqli_query($conn, $sql);

    return $return;
}


/* UpdateReservation($conn,$userId,$userHeight,$userAge,$productId,$date) -> $return
    $conn : mysqli := Connection to the SQL database
    $userId : integer := VALUE to connect the reservation with the good user
    $userHeight : integer := VALUE the height of the user
    $userAge : integer := VALUE the age of the user
    $productId : integer := VALUE to connect the reservation with the good product
    $date : date := VALUE date of the reservation

    $return : boolean := Indicate the status of the query
*/
function UpdateReservation($conn,$userId,$userHeight,$userAge,$productId,$date){
    $sql = "UPDATE `reservations` SET `userHeight` ='$userHeight', `userAge` ='$userAge', `productId` = $productId, `date` ='$date' WHERE `userId` = '$userId'";
    $return = mysqli_query($conn, $sql);

    return $return;
}
/* DeleteReservation($conn,$userId) -> $return
    $conn : mysqli := Connection to the SQL database
    $userId : integer := VALUE to connect the reservation with the good user

    $return : boolean := Indicate the status of the query
*/
function DeleteReservation($conn,$userId){
    $sql = "DELETE FROM `reservations` WHERE `userId`='$userId'";
    $return = mysqli_query($conn,$sql);

    return $return;
}
/* SelectReservation($conn,$userId) -> $return
    $conn : mysqli := Connection to the SQL database
    $userId : integer := VALUE to connect the reservation with the good user

    $return : array or boolean or null := Indicate the status of the query
*/
function SelectReservation($conn,$userId){
    $sql="SELECT * FROM `reservations` WHERE `userId`='$userId'" ;
	if($response=mysqli_query($conn, $sql)){
		$return=mysqli_fetch_assoc($response);
	} else {
        $return=false;
    }
	return $return;
}


?>