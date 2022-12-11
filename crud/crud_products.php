<?php 
// --- CRUD produit ---


/* CreateProduit($conn,$name,$price,$dateStart,$dateEnd,$minAge,$maxAge,$minWeight,$maxWeight,$minHeight,$maxHeight) -> $return
    $conn : mysqli := Connection to the SQL database
    $name : string := VALUE name of the product
    $price : integer := VALUE price of the product
    $dateStart : date := VALUE starting date
    $dateEnd : date := VALUE ending date
    $minAge : integer := VALUE minimum age to do the activity
    $maxAge : integer := VALUE maximum age to do the activity
    $minWeight : integer := VALUE minimum weight to practice
    $maxWeight : integer := VALUE maximum weight to practice
    $minHeight : integer := VALUE minimum height
    $maxHeight : integer := VALUE maximum height

    $return : boolean := Indicate the status of the query
*/ 

function CreateProduit($conn,$name,$price,$dateStart,$dateEnd,$minAge,$maxAge,$minWeight,$maxWeight,$minHeight,$maxHeight){
    $sql = "INSERT INTO `products` (`name`,`price`,`dateStart`,`dateEnd`,`minAge`,`maxAge`,`minWeight`,`maxWeight`,`minHeight`,`maxHeight`) VALUES ('$name', '$price', '$dateStart', '$dateEnd', '$minAge', '$maxAge', '$minWeight', '$maxWeight', '$minHeight', '$maxHeight')";
    $return = mysqli_query($conn, $sql);

    return $return;
}

/* UpdateProduit($conn,$name,$price,$dateStart,$dateEnd,$minAge,$maxAge,$minWeight,$maxWeight,$minHeight,$maxHeight) -> $return
    $conn : mysqli := Connection to the SQL database
    $name : string := VALUE name of the product
    $price : integer := VALUE price of the product
    $dateStart : date := VALUE starting date
    $dateEnd : date := VALUE ending date
    $minAge : integer := VALUE minimum age to do the activity
    $maxAge : integer := VALUE maximum age to do the activity
    $minWeight : integer := VALUE minimum weight to practice
    $maxWeight : integer := VALUE maximum weight to practice
    $minHeight : integer := VALUE minimum height
    $maxHeight : integer := VALUE maximum height

    $return : boolean := Indicate the status of the query
*/

function UpdateProduit($conn,$name,$price,$dateStart,$dateEnd,$minAge,$maxAge,$minWeight,$maxWeight,$minHeight,$maxHeight){
    $sql = "UPDATE `products` SET `price` = '$price', `dateStart` = '$dateStart', `dateEnd` = '$dateEnd', `minAge` = '$minAge', `maxAge` = '$maxAge', `minWeight` = '$minWeight', `maxWeight` = '$maxWeight', `minHeight` = '$minHeight', `maxHeight` = '$maxHeight' WHERE `name` = '$name'";

    $return = mysqli_query($conn, $sql);

    return $return;
}

/* DeleteProduit($conn,$name) -> $return
    $conn : mysqli := Connection to the SQL database
    $name : string := VALUE name of the product
*/

function DeleteProduit($conn,$name){

    $sql = "DELETE FROM `products` WHERE `name` = '$name'";
    $return = mysqli_query($conn, $sql);
    return $return;
}

/* SelectProduit($conn,$name) -> $return
    $conn : mysqli := Connection to the SQL database
    $name : VALUE name of the product

    $return : array or boolean or null : Contains the response or indicate a connection error
*/
function SelectProduit($conn, $name){
    $query="SELECT * FROM `products` WHERE `name`='$name'" ;
	if($response=mysqli_query($conn, $query)){
		$return=mysqli_fetch_assoc($response);
	} else {
        $return=false;
    }
	return $return;
}

function SelectProduit_id($conn, $id){
    $query="SELECT `name`, `price` FROM `products` WHERE `id`='$id'" ;
	if($response=mysqli_query($conn, $query)){
		$return=mysqli_fetch_assoc($response);
	} else {
        $return=false;
    }
	return $return;
}

function SelectAllProduit($conn){
    $table = [];
    $query="SELECT * FROM `products`" ;
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