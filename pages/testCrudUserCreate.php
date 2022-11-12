<?php
//Premiere balise PHP pour includes les principaux fichiers (Head,db_connect...) ainsi que pour s'occuper des sessions (visiteur,admin)
//–––––––––––––––

$html_head = "<!DOCTYPE html>\n";
$html_head .= "<html>\n<head>\n";
$html_head .= "<meta charset='utf-8' />\n";
$html_head .= "<title>test crud</title>\n";
$html_head .= "</head>\n";
$html_head .= "<body>\n";

echo $html_head;

//include BDD connect
include("../db/db_connect.php");

//include cruds
include("../crud/crud_users.php");

?>

<?php
// ---  envoie données BDD  ---

//var_dump($_POST);

//users
if(isset($_POST["id"])){
    $id = $_POST["id"];
}

if(isset($_POST["lastName"])){
    $lastName = $_POST["lastName"];
}

if(isset($_POST["firstName"])){
    $firstName = $_POST["firstName"];
}

if(isset($_POST["mail"])){
    $mail = $_POST["mail"];
}

if(isset($_POST["phoneNum"])){
    $phoneNum = $_POST["phoneNum"];
}

if(isset($_POST["height"])){
    $height = $_POST["height"];
}

if(isset($_POST["weight"])){
    $weight = $_POST["weight"];
}
if(isset($_POST["age"])){
    $age = $_POST["age"];
}
if(isset($_POST["admin"])){
    $admin = $_POST["admin"];
}

?>

<p><a href="../index.php">INDEX</a></p>


<div>
    <div>
        <h3>CREATE USER</h3>
        <form action="" method="post" name="userForm" id="userForm" class="form">
            <label for="lastName">Nom de famille de l'utilisateur : </label>
            <input type="text" placeholder="nom" name="lastName" id="lastName"/>

            <label for="firstName">Prénom de l'utilisateur : </label>
            <input type="text" placeholder="prénom" name="firstName" id="firstName"/>

            <label for="mail">Mail de l'utilisateur : </label>
            <input type="mail" placeholder="mail" name="mail" id="mail"/>

            <label for="phoneNum">Numéro de téléphone de l'utilisateur : </label>
            <input type="tel" placeholder="numéro telephone" name="phoneNum" id="phoneNum"/>

            <label for="height">Taille de l'utilisateur : </label>
            <input type="number" placeholder="taille" name="height" id="height"/>

            <label for="weight">Poids de l'utilisateur : </label>
            <input type="number" placeholder="poids" name="weight" id="weight"/>

            <label for="age">Age de l'utilisateur : </label>
            <input type="number" placeholder="age" name="age" id="age"/>

            <label for="admin">Droit admin de l'utilisateur : </label>
            <select name="admin" id="admin">
                <option value=0>faux</option>
                <option value=1>vrai</option>
            </select>

            <label for="submit">valider : </label>
            <input type="submit" name="submitCreate" id="submit">
        </form>
    </div>
</div>


<?php

if (!empty($_POST["lastName"])&&!empty($_POST["firstName"])&&!empty($_POST["mail"])&&!empty($_POST["phoneNum"])&&!empty($_POST["height"])&&!empty($_POST["weight"])&&!empty($_POST["age"])){

    $res = CreateUser($conn, $lastName, $firstName, $mail, $phoneNum, $height, $weight, $age, $admin);



    if(!$res){
        echo("Something wrong append...<br>Did you complet all the cases ?");
    }
    else {
        echo ("L'utilisateur à bien été ajouté.");

    }
}

?>



<?php
//Troisieme balise PHP pour include le(s) fichier(s) du footer
//–––––––––––––––

//include BDD disconnect
include("../db/db_disconnect.php");

//Include du footer
include("footer.php");

?>