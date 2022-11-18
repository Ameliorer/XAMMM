<?php
/*---------------------------------------
CRUD images
---------------------------------------*/

/*
CreateUser($conn, $lastName, $firstName, $mail, $phoneNum, $height, $weight, $age, $admin) -> $return
    $conn : mysqli := Connection to the SQL database

    $lastName : string := VALUE user's last name,
    $firstName: string := VALUE user's first name,
    $mail : string := VALUE user's mail,
    $password : string := VALUE user's password,
    $phoneNum : int := VALUE user's phone number,
    $height : int := VALUE user's height,
    $weight : int := VALUE user's weight,
    $age : int := VALUE user's age,
    $admin : tinyint := VALUE admin or user,

    $return : boolean := Indicate the status of the query
*/
function CreateUser($conn, $lastName, $firstName, $mail, $password, $phoneNum, $height, $weight, $age, $admin){
    $query="INSERT INTO `users` (`lastName`, `firstName`, `mail`, `password` `phoneNum`, `taille`, `weight`, `age`, `admin`) VALUES ('$lastName', '$firstName', '$mail', '$password', '$phoneNum', '$height', '$weight', '$age', '$admin')";
    $return=mysqli_query($conn, $query);
    return $return ;
}

/*
UpdateUser($conn, $id, $lastName, $firstName, $mail, $phoneNum, $height, $weight, $age, $admin) -> $return
    $conn : mysqli := Connection to the SQL database

    $id : int := PRIMARY KEY user's unique id,
    $lastName : string := VALUE user's last name,
    $firstName: string := VALUE user's first name,
    $mail : string := VALUE user's mail,
    $password : string := VALUE user's password,
    $phoneNum : int := VALUE user's phone number,
    $height : int := VALUE user's height,
    $weight : int := VALUE user's weight,
    $age : int := VALUE user's age,
    $admin : tinyint := VALUE admin or user,

    $return : boolean := Indicate the status of the query
*/
function UpdateUser($conn, $id, $lastName, $firstName, $mail, $password, $phoneNum, $height, $weight, $age, $admin){
    $query="UPDATE `users` SET `lastName`= '$lastName', `firstName`= '$firstName', `mail`= '$mail', `password`= '$password', `phoneNum`= '$phoneNum', `height`= '$height', `weight`= '$weight', `age`= '$age', `admin`= '$admin' WHERE `id`='$id' ";
    $return=mysqli_query($conn, $query);
    return $return;
}

/*
DeleteUser($conn, $id) -> $return
    $conn : mysqli := Connection to the SQL database

    $id : int := PRIMARY KEY user's unique id,

    $return : boolean := Indicate the status of the query
*/
function DeleteUser($conn, $id){
    $query="DELETE FROM `users` WHERE `id`='$id' " ;
    $return=mysqli_query($conn, $query) ;
    return $return;
}

/*
SelectUser() -> $return
    $conn : mysqli := Connection to the SQL database

    $id : int := PRIMARY KEY user's unique id,

    $return : array | boolean | null := Contains the response or indicate a connection error
*/
function SelectUser($conn, $id){
    $query="SELECT * FROM `users` WHERE `id`='$id' " ;
    if($response=mysqli_query($conn, $query)){
        $return=mysqli_fetch_assoc($response);
    } else {
        $return=false;
    }
    return $return;
}
?>