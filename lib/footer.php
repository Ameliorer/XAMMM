<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/~XAMMM/db/db_connect.php";
include_once($path);

function nameAndAge($iduser){
    global $conn ;
    $user = mysqli_query($conn, "SELECT `firstname`, `age` FROM `users` WHERE `id`='$iduser';"); // sélectionne toutes les informations sur le type du produit
    $theUser = mysqli_fetch_assoc ($user);
    return $theUser;
}



function carousel (){
    global $conn ;

        $result = mysqli_query($conn, "SELECT * FROM `opinion` WHERE grade=5;"); // sélectionne toutes les informations sur le type du produit

        echo("<div class='carousel'>"); // creation d'un carrousel


        while ($row = mysqli_fetch_assoc ($result)){ 	// pour chaque produit en fonction de son type
            echo("<div class='carousel-item'>");		// creation d'une carte
            echo("<span class='grade'>⭐⭐⭐⭐⭐</span>");		// creation d'une carte
            echo("<span class='textAvis'>");		// creation d'une carte
            echo("<p>".$row['text']."</p>");		//la description
            echo("</span>");
            echo("<span class='user'>");
            echo("<h4> -".nameAndAge($row['iduser'])['firstname'].", ".nameAndAge($row['iduser'])['age']. " ans</h4>");	// le grade
            echo("</span>");
            echo("</div>");
        }

        echo("</div>");
        echo("</section>");
    }



?>
