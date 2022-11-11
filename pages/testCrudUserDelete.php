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
            <h3>DELETE USER</h3>
            <form action="" method="post" name="userForm" id="userForm" class="form">
                <label for="id">Id de l'utilisateur : </label>
                <input type="number" placeholder="id" name="id" id="id"/>

                <label for="submit">valider : </label>
                <input type="submit" name="submitDelete" id="submit">
            </form>
        </div>
    </div>


    <script>
        console.log("pop");
        let forms = document.querySelectorAll(".form");

        for(let form of forms){
            form.reset();
            console.log(form);
        }
    </script>

<?php

if (!empty($_POST["id"])){

    $res = DeleteUser($conn, $id);



    if(!$res){
        echo("Something wrong append...<br>Did you complet all the cases ?");
    }
    else {
        echo ("L'utilisateur n°=$id à bien été supprimé.");

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