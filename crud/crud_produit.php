<?php 
// --- CRUD produit ---


/* CreateProduit($conn,$nom,$prix,$dateDebut,$dateFin,$ageMin,$ageMax,$poidsMin,$poidsMax,$tailleMin,$tailleMax) -> $return
    $conn : mysqli := Connection to the SQL database
    $nom : string := VALUE name of the product
    $prix : integer := VALUE price of the product
    $dateDebut : date := VALUE starting date
    $dateFin : date := VALUE ending date
    $ageMin : integer := VALUE minimum age to do the activity
    $ageMax : integer := VALUE maximum age to do the activity
    $poidsMin : integer := VALUE minimum weight to practice
    $poidsMax : integer := VALUE maximum weight to practice
    $tailleMin : integer := VALUE minimum height
    $tailleMax : integer := VALUE maximum height

    $return : boolean := Indicate the status of the query
*/ 

function CreateProduit($conn,$nom,$prix,$dateDebut,$dateFin,$ageMin,$ageMax,$poidsMin,$poidsMax,$tailleMin,$tailleMax){
    $sql = "INSERT INTO `produit` (`nom`,`prix`,`dateDebut`,`dateFin`,`ageMin`,`ageMax`,`poidsMin`,`poidsMax`,`tailleMin`,`tailleMax`) VALUES ('$nom', '$prix', '$dateDebut', '$dateFin', '$ageMin', '$ageMax', '$poidsMin', '$poidsMax', '$tailleMin', '$tailleMax')";
    $return = mysqli_query($conn, $sql);

    return $return;
}

/* UpdateProduit($conn,$nom,$prix,$dateDebut,$dateFin,$ageMin,$ageMax,$poidsMin,$poidsMax,$tailleMin,$tailleMax) -> $return
    $conn : mysqli := Connection to the SQL database
    $nom : string := VALUE name of the product
    $prix : integer := VALUE price of the product
    $dateDebut : date := VALUE starting date
    $dateFin : date := VALUE ending date
    $ageMin : integer := VALUE minimum age to do the activity
    $ageMax : integer := VALUE maximum age to do the activity
    $poidsMin : integer := VALUE minimum weight to practice
    $poidsMax : integer := VALUE maximum weight to practice
    $tailleMin : integer := VALUE minimum height
    $tailleMax : integer := VALUE maximum height

    $return : boolean := Indicate the status of the query
*/

function UpdateProduit($conn,$nom,$prix,$dateDebut,$dateFin,$ageMin,$ageMax,$poidsMin,$poidsMax,$tailleMin,$tailleMax){
    $sql = "UPDATE `produit` SET `prix` = '$prix', `dateDebut` = '$dateDebut', `dateFin` = '$dateFin', `ageMin` = '$ageMin', `ageMax` = '$ageMax', `poidsMin` = '$poidsMin', `poidsMax` = '$poidsMax', `tailleMin` = '$tailleMin', `tailleMax` = '$tailleMax' WHERE `nom` = '$nom'";

    $return = mysqli_query($conn, $sql);

    return $return;
}

/* DeleteProduit($conn,$nom) -> $return
    $conn : mysqli := Connection to the SQL database
    $nom : string := VALUE name of the product
*/

function DeleteProduit($conn,$nom){

    $sql = "DELETE FROM `produit` WHERE `nom` = '$nom'";
    $return = mysqli_query($conn, $sql);
    return $return;
}

/* SelectProduit($conn,$nom) -> $return
    $conn : mysqli := Connection to the SQL database
    $nom : VALUE name of the product

    $return : array or boolean or null : Contains the response or indicate a connection error
*/
function SelectProduit($conn, $nom){
    $query="SELECT * FROM `produit` WHERE `nom`='$nom'" ;
	if($response=mysqli_query($conn, $query)){
		$return=mysqli_fetch_assoc($response);
	} else {
        $return=false;
    }
	return $return;
}

?>