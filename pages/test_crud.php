<?php 
//Premiere balise PHP pour includes les principaux fichiers (Head,db_connect...) ainsi que pour s'occuper des sessions (visiteur,admin)
//–––––––––––––––

$html_head = "<!DOCTYPE html>\n";
$html_head .= "<html>\n<head>\n";
$html_head .= "<meta charset='utf-8' />\n";
$html_head .= "<title>test crud</title>\n";
$html_head .= "</head>\n";
$html_head .= "<body>\n";

echo($html_head);

//include BDD connect
include("../db/db_connect.php");

//include cruds
include("../crud/crud_blog.php");
include("../crud/crud_codes.php");
include("../crud/crud_images.php");
include("../crud/crud_produit.php");
include("../crud/crud_promos.php");
include("../crud/crud_reservations.php");
include("../crud/crud_users.php");

?>

<p><a href="../index.php">ACCUEIL</a></p>

<div>
    <div>
        <h3>blog</h3>
        <form action="" method="post" name="blogForm" id="blogForm">
            <label for="blogTitle">Titre du Post : </label>
            <input type="text" placeholder="titre" id="blogTitle" name="blogTitle"/>

            <label for="blogContent">contenu du Post : </label>
            <textarea name="blogContent" rows="10" cols="30" id="blogContent">Contenu</textarea>

            <label for="blogDate">Date du Post : </label>
            <input type="date" placeholder="date" id="blogDate" name="blogDate"/>

            <label for="blogAction">Action à faire : </label>
            <select name="blogAction" id="blogAction">
                <option value="create">create</option>
                <option value="update">update</option>
                <option value="delete">delete</option>
                <option value="select">select</option>
            </select>

            <label for="blogSubmit">valider : </label>
            <input type="submit" name="blogSubmit" id="blogSubmit">
        </form>
    </div>

    <div>
        <h3>codes</h3>
        <form action="" method="post" name="codesForm" id="codesForm">
            <label for="codesCodes">code du Codes : </label>
            <input type="text" placeholder="code" name="codesCodes" id="codesCodes"/>

            <label for="codesIdType">Id du type de produit du Codes : </label>
            <input type="number" placeholder="id type" name="codesIdType" id="codesIdType"/>

            <label for="codesDateD">date de début du Codes : </label>
            <input type="date" placeholder="date debut" name="codesDateD" id="codesDateD"/>

            <label for="codesDateF">date de fin du Codes : </label>
            <input type="date" placeholder="date fin" name="codesDateF" id="codesDateF"/>

            <label for="codesPercentage">pourcentage du Codes : </label>
            <input type="number" placeholder="pourcentage" name="codesPercentage" id="codesPercentage"/>

            <label for="codesAction">Action à faire : </label>
            <select name="codesAction" id="codesAction">
                <option value="create">create</option>
                <option value="update">update</option>
                <option value="delete">delete</option>
                <option value="select">select</option>
            </select>

            <label for="codesSubmit">valider : </label>
            <input type="submit" name="codesSubmit" id="codesSubmit">
        </form>
    </div>

    <div>
        <h3>images</h3>
        <form action="" method="post" name="imagesForm" id="imagesForm">
            <label for="imagesNom">Nom de l'image : </label>
            <input type="text" placeholder="nom" name="imagesNom" id="imagesNom"/>
            
            <label for="imagesIdBlog">Id du Blog de l'image : </label>
            <input type="number" placeholder="id blog" name="imagesIdBlog" id="imagesIdBlog"/>

            <label for="imagesAction">Action à faire : </label>
            <select name="imagesAction" id="imagesAction">
                <option value="create">create</option>
                <option value="update">update</option>
                <option value="delete">delete</option>
                <option value="select">select</option>
            </select>

            <label for="imagesSubmit">valider : </label>
            <input type="submit" name="imagesSubmit" id="imagesSubmit">
        </form>
    </div>

    <div>
        <h3>produit</h3>
        <form action="" method="post" name="produitForm" id="produitForm">
            <label for="produitNom">Nom du produit : </label>
            <input type="text" placeholder="nom" name="produitNom" id="produitNom"/>

            <label for="produitPrix">Prix du produit : </label>
            <input type="number" placeholder="prix" name="produitPrix" id="produitPrix"/>

            <label for="produitDateD">date de début du produit : </label>
            <input type="date" placeholder="date debut" name="produitDateD" id="produitDateD"/>

            <label for="produitDateF">Date de fin du produit : </label>
            <input type="date" placeholder="date fin" name="produitDateF" id="produitDateF"/>

            <label for="produitAgeMin">Age minimum (an) pour le produit : </label>
            <input type="number" placeholder="age min" name="produitAgeMin" id="produitAgeMin"/>

            <label for="produitAgeMax">Age maximum (an) pour le produit : </label>
            <input type="number" placeholder="age max" name="produitAgeMax" id="produitAgeMax"/>

            <label for="produitPoidsMin">poids minimum (kg) pour le produit : </label>
            <input type="number" placeholder="poids min" name="produitPoidsMin" id="produitPoidsMin"/>

            <label for="produitPoidsMax">Poids maximum (kg) pour le produit : </label>
            <input type="number" placeholder="poids max" name="produitPoidsMax" id="produitPoidsMax"/>

            <label for="produitTailleMin">Taille minimum (cm) pour le produit : </label>
            <input type="number" placeholder="taille min" name="produitTailleMin" id="produitTailleMin"/>

            <label for="produitTailleMax">Taille maximum (cm) pour le produit : </label>
            <input type="number" placeholder="taille max" name="produitTailleMax" id="produitTailleMax"/>

            <label for="produitAction">Action à faire : </label>
            <select name="produitAction" id="produitAction">
                <option value="create">create</option>
                <option value="update">update</option>
                <option value="delete">delete</option>
                <option value="select">select</option>
            </select>

            <label for="produitSubmit">valider : </label>
            <input type="submit" name="produitSubmit" id="produitSubmit">
        </form>
    </div>

    <div>
        <h3>promos</h3>
        <form action="" method="post" name="promosForm" id="promosForm">
            <label for="promosNom">Nom de la promo : </label>
            <input type="text" placeholder="nom" name="promosNom" id="promosNom"/>

            <label for="promosDateD">Date de début de la promo : </label>
            <input type="date" placeholder="date debut" name="promosDateD" id="promosDateD"/>

            <label for="promosDateF">Date de fin de la promo : </label>
            <input type="date" placeholder="date fin" name="promosDateF" id="promosDateF"/>

            <label for="promosDescription">Description de le promo : </label>
            <textarea name="promosDescription" rows="10" cols="30" id="promosDescription">Description</textarea>

            <label for="promosAction">Action à faire : </label>
            <select name="promosAction" id="promosAction">
                <option value="create">create</option>
                <option value="update">update</option>
                <option value="delete">delete</option>
                <option value="select">select</option>
            </select>

            <label for="promosSubmit">valider : </label>
            <input type="submit" name="promosSubmit" id="promosSubmit">
        </form>
    </div>

    <div>
        <h3>reservation</h3>
        <form action="" method="post" name="reservationForm" id="reservationForm">
            <label for="reservationIdUser">Id de l'utilisateur ayant fait la réservation : </label>
            <input type="number" placeholder="id user" name="reservationIdUser" id="reservationIdUser"/>

            <label for="reservationTailleUser">Taille de l'utilisateur ayant fait la réservation : </label>
            <input type="number" placeholder="taille user" name="reservationTailleUser" id="reservationTailleUser"/>

            <label for="reservationPoidsUser">Poids de l'utilisateur ayant fait la réservation : </label>
            <input type="number" placeholder="poids user" name="reservationPoidsUser" id="reservationPoidsUser"/>

            <label for="reservationAgeUser">Age de l'utilisateur ayant fait la réservation : </label>
            <input type="number" placeholder="age user" name="reservationAgeUser" id="reservationAgeUser"/>

            <label for="reservationIdPruduit">Id du produit réservé : </label>
            <input type="number" placeholder="id produit" name="reservationIdPruduit" id="reservationIdPruduit"/>

            <label for="reservationDate">Date de la réservation : </label>
            <input type="date" placeholder="date" name="reservationDate" id="reservationDate"/>

            <label for="reservationAction">Action à faire : </label>
            <select name="reservationAction" id="reservationAction">
                <option value="create">create</option>
                <option value="update">update</option>
                <option value="delete">delete</option>
                <option value="select">select</option>
            </select>

            <label for="reservationSubmit">valider : </label>
            <input type="submit" name="reservationSubmit" id="reservationSubmit">
        </form>
    </div>

    <div>
        <h3>utilisateur</h3>
        <form action="" method="post" name="utilisateurForm" id="utilisateurForm">
            <label for="utilisateurNom">Nom de l'utilisateur : </label>
            <input type="text" placeholder="nom" name="utilisateurNom" id="utilisateurNom"/>

            <label for="utilisateurPrenom">Prenom de l'utilisateur : </label>
            <input type="text" placeholder="prenom" name="utilisateurPrenom" id="utilisateurPrenom"/>

            <label for="utilisateurMail">Mail de l'utilisateur : </label>
            <input type="mail" placeholder="mail" name="utilisateurMail" id="utilisateurMail"/>

            <!--
            <label for="utilisateurPassword">mot de passe de l'utilisateur : </label>
            <input type="text" placeholder="mot de passe" name="utilisateurPassword" id="utilisateurPassword"/>
            -->

            <label for="utilisateurNumTel">numero de telephone de l'utilisateur : </label>
            <input type="tel" placeholder="numero telephone" name="utilisateurNumTel" id="utilisateurNumTel"/>

            <label for="utilisateurTaille">Taille de l'utilisateur : </label>
            <input type="number" placeholder="taille" name="utilisateurTaille" id="utilisateurTaille"/>

            <label for="utilisateurPoids">Poids de l'utilisateur : </label>
            <input type="number" placeholder="poids" name="utilisateurPoids" id="utilisateurPoids"/>

            <label for="utilisateurAge">Age de l'utilisateur : </label>
            <input type="number" placeholder="age" name="utilisateurAge" id="utilisateurAge"/>

            <label for="utilisateurAdmin">Droit admin de l'utilisateur : </label>
            <select name="utilisateurAdmin" id="utilisateurAdmin">
                <option value="false">faux</option>
                <option value="true">vrai</option>
            </select>

            <label for="utilisateurAction">Action à faire : </label>
            <select name="utilisateurAction" id="utilisateurAction">
                <option value="create">create</option>
                <option value="update">update</option>
                <option value="delete">delete</option>
                <option value="select">select</option>
            </select>

            <label for="utilisateurSubmit">valider : </label>
            <input type="submit" name="utilisateurSubmit" id="utilisateurSubmit">
        </form>
    </div>
</div>

<?php
// ---  envoie données BDD  ---

//blog
var_dump($_POST);

//codes
var_dump($_POST);/*
if(isset($_POST["code"])){
    $code = $_POST["code"];
}
if(isset($_POST["type"])){
    $type = $_POST["type"];
}
if(isset($_POST["dateDebut"])){
    $dateDebut = $_POST["dateDebut"];
}
if(isset($_POST["dateFin"])){
    $dateFin = $_POST["dateFin"];
}
if(isset($_POST["pourcentage"])){
    $pourcentage = $_POST["pourcentage"];
}*/



//images
var_dump($_POST);

//produit
var_dump($_POST);

//promos
var_dump($_POST);

//reservation
var_dump($_POST);

//users
var_dump($_POST);

?>

<?php 
//Troisieme balise PHP pour include le(s) fichier(s) du footer
//–––––––––––––––

//include BDD disconnect
include("../db/db_disconnect.php");

//Include du footer
include("footer_index.php");

?>