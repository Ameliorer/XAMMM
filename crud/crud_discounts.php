<?php
/*---------------------------------------
CRUD discounts
---------------------------------------*/

/*
CreateDiscount($conn, $idProduct, $nameDiscount, $percentage, $dateStart, $dateEnd, $description) -> $return
    $conn : mysqli := Connection to the SQL database
    $idProduct : int := FOREIGN KEY id of the product associated
    $nameDiscount : string := Name of the discount
    $percentage : int := Discount percentage for the product associated
    $dateStart : string := Starting date of the discount
    $dateEnd : string := Ending date of the discount
    $description : string := Description of the discount

    $return : boolean := Indicate the status of the query
*/
function CreateDiscount($conn, $idProduct, $nameDiscount, $percentage, $dateStart, $dateEnd, $description){
    $description = addslashes($description);
    $query = "INSERT INTO `discounts` (`idProduct`, `discountName`, `percentage`, `dateStart`, `dateEnd`, `description`) VALUES ('$idProduct', '$nameDiscount', '$percentage', '$dateStart', '$dateEnd', '$description')";
    $return = mysqli_query($conn, $query);
    return $return;
}

/*
UpdateDiscount($conn, $id, $idProduct, $nameDiscount, $percentage, $dateStart, $dateEnd, $description) -> $return
    $conn : mysqli := Connection to the SQL database
    $id : int := PRIMARY KEY id of the discount
    $idProduct : int := FOREIGN KEY id of the product associated
    $nameDiscount : string := Name of the discount
    $percentage : int := Discount percentage for the product associated
    $dateStart : string := Starting date of the discount
    $dateEnd : string := Ending date of the discount
    $description : string := Description of the discount

    $return : boolean := Indicate the status of the query
*/
function UpdateDiscount($conn, $id, $idProduct, $nameDiscount, $percentage, $dateStart, $dateEnd, $description){
    $description = addslashes($description);
    $query = "UPDATE `discounts` set `idProduct`='$idProduct', `discountName`='$nameDiscount', `percentage`=$percentage, `dateStart`='$dateStart', `dateEnd`='$dateEnd', `description`='$description' WHERE `id`='$id'";
    $return = mysqli_query($conn, $query);
    return $return;
}

/*
DeleteDiscount($conn, $id) -> $return
    $conn : mysqli := Connection to the SQL database
    $id : int := PRIMARY KEY id of the discount
    
    $return : boolean := Indicate the status of the query
*/
function DeleteDiscount($conn, $id){
    $query = "DELETE FROM `discounts` WHERE `id` = '$id'";
    $return = mysqli_query($conn, $query);
    return $return;
}

/*
SelectDiscount($conn, $id) -> $return
    $conn : mysqli := Connection to the SQL database
    $id : int := PRIMARY KEY id of the discount

    $return : array | boolean | null := Contains the response or indicate a connection error
*/
function SelectDiscount($conn, $id){
    $query = "SELECT * FROM `discounts` WHERE `id`='$id'";
    if ($response = mysqli_query($conn, $query)){
        $return = mysqli_fetch_assoc($response);
    } else {
        $return = false;
    }
    return $return;
}

function SelectAllDiscount($conn){
    $query = "SELECT * FROM `discounts`";
    $table = [];
    if ($response = mysqli_query($conn, $query)){
        while ($row = mysqli_fetch_assoc($response)){
            $table []= $row;
        }
        $return = $table;
    } else {
        $return = false;
    }
    return $return;
}

?>