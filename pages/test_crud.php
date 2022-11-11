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
include("../crud/crud_blog.php");
include("../crud/crud_codes.php");
include("../crud/crud_images.php");
include("../crud/crud_produit.php");
include("../crud/crud_promos.php");
include("../crud/crud_reservations.php");
include("../crud/crud_users.php");

?>

<?php
// ---  envoie données BDD  ---

//var_dump($_POST);

//blog
if(isset($_POST["blogTitle"])){
    $blogTitle = $_POST["blogTitle"];
}
if(isset($_POST["blogContent"])){
    $blogContent = $_POST["blogContent"];
}
if(isset($_POST["blogDate"])){
    $blogDate = $_POST["blogDate"];
}
if(isset($_POST["blogAction"])){
    $blogAction = $_POST["blogAction"];
}

//codes
$codesCodes = "";
if(isset($_POST["codesCodes"])){
    $codesCodes = $_POST["codesCodes"];
    var_dump($_POST);
}
if(isset($_POST["codesIdType"])){
    $codesIdType = $_POST["codesIdType"];
}
if(isset($_POST["codesDateD"])){
    $codesDateD = $_POST["codesDateD"];
}
if(isset($_POST["codesDateF"])){
    $codesDateF = $_POST["codesDateF"];
}
if(isset($_POST["codesPercentage"])){
    $codesPercentage = $_POST["codesPercentage"];
}
$codesAction = "";
if(isset($_POST["codesAction"])){
    $codesAction = $_POST["codesAction"];
}

// --- codes create
if($codesCodes != "" and isset($codesIdType) and isset($codesDateD) and isset($codesDateF) and isset($codesPercentage) and $codesAction == "create"){
    if(CreateCodes($conn, $codesCodes, $codesIdType, $codesDateD, $codesDateF, $codesPercentage)){
        echo "<p>create codes success</p>";
    }else{
        echo "<p>create codes failure</p>";
    }
}

// --- codes update
if($codesCodes != "" and isset($codesIdType) and isset($codesDateD) and isset($codesDateF) and isset($codesPercentage) and $codesAction == "update"){
    if(UpdateCodes($conn, $codesCodes, $codesIdType, $codesDateD, $codesDateF, $codesPercentage)){
        echo "<p>update codes success</p>";
    }else{
        echo "<p>update codes failure</p>";
    }
}

// --- codes delete
if($codesCodes =! "" and $codesAction == "delete"){
    if(DeleteCodes($conn, $codesCodes)){
        echo "<p>delete codes success</p>";
    }else{
        echo "<p>delete codes failure</p>";
    }
}

// --- codes select
if(isset($codesIdType) and $codesAction == "select"){
    if($ret_codesType = SelectCodes_type($conn, $codesIdType)){
        echo "<p>select codes success</p>";
        var_dump($ret_codesType);
    }else{
        echo "<p>select codes failure</p>";
    }
}



//images
if(isset($_POST["imagesNom"])){
    $imagesNom = $_POST["imagesNom"];
}
if(isset($_POST["imagesIdBlog"])){
    $imagesIdBlog = $_POST["imagesIdBlog"];
}
if(isset($_POST["imagesAction"])){
    $imagesAction = $_POST["imagesAction"];
}

//produit
if(isset($_POST["produitNom"])){
    $produitNom = $_POST["produitNom"];
}
if(isset($_POST["produitPrix"])){
    $produitPrix = $_POST["produitPrix"];
}
if(isset($_POST["produitDateD"])){
    $produitDateD = $_POST["produitDateD"];
}
if(isset($_POST["produitDateF"])){
    $produitDateF = $_POST["produitDateF"];
}
if(isset($_POST["produitAgeMin"])){
    $produitAgeMin = $_POST["produitAgeMin"];
}
if(isset($_POST["produitAgeMax"])){
    $produitAgeMax = $_POST["produitAgeMax"];
}
if(isset($_POST["produitPoidsMin"])){
    $produitPoidsMin = $_POST["produitPoidsMin"];
}
if(isset($_POST["produitPoidsMax"])){
    $produitPoidsMax = $_POST["produitPoidsMax"];
}
if(isset($_POST["produitTailleMin"])){
    $produitTailleMin = $_POST["produitTailleMin"];
}
if(isset($_POST["produitTailleMax"])){
    $produitTailleMax = $_POST["produitTailleMax"];
}
if(isset($_POST["produitAction"])){
    $produitAction = $_POST["produitAction"];
}

//promos
if(isset($_POST["promosNom"])){
    $promosNom = $_POST["promosNom"];
}
if(isset($_POST["promosDateD"])){
    $promosDateD = $_POST["promosDateD"];
}
if(isset($_POST["promosDateF"])){
    $promosDateF = $_POST["promosDateF"];
}
if(isset($_POST["promosDescription"])){
    $promosDescription = $_POST["promosDescription"];
}
if(isset($_POST["promosAction"])){
    $promosAction = $_POST["promosAction"];
}

//reservation
if(isset($_POST["reservationIdUser"])){
    $reservationIdUser = $_POST["reservationIdUser"];
}
if(isset($_POST["reservationTailleUser"])){
    $reservationTailleUser = $_POST["reservationTailleUser"];
}
if(isset($_POST["reservationPoidsUser"])){
    $reservationPoidsUser = $_POST["reservationPoidsUser"];
}
if(isset($_POST["reservationAgeUser"])){
    $reservationAgeUser = $_POST["reservationAgeUser"];
}
if(isset($_POST["reservationIdPruduit"])){
    $reservationIdPruduit = $_POST["reservationIdPruduit"];
}
if(isset($_POST["reservationDate"])){
    $reservationDate = $_POST["reservationDate"];
}
if(isset($_POST["reservationAction"])){
    $reservationAction = $_POST["reservationAction"];
}

//users
if(isset($_POST["utilisateurNom"])){
    $utilisateurNom = $_POST["utilisateurNom"];
}
if(isset($_POST["utilisateurPrenom"])){
    $utilisateurPrenom = $_POST["utilisateurPrenom"];
}
if(isset($_POST["utilisateurMail"])){
    $utilisateurMail = $_POST["utilisateurMail"];
}
if(isset($_POST["utilisateurPassword"])){
    $utilisateurPassword = $_POST["utilisateurPassword"];
}
if(isset($_POST["utilisateurNumTel"])){
    $utilisateurNumTel = $_POST["utilisateurNumTel"];
}
if(isset($_POST["utilisateurTaille"])){
    $utilisateurTaille = $_POST["utilisateurTaille"];
}
if(isset($_POST["utilisateurPoids"])){
    $utilisateurPoids = $_POST["utilisateurPoids"];
}
if(isset($_POST["utilisateurAge"])){
    $utilisateurAge = $_POST["utilisateurAge"];
}
if(isset($_POST["utilisateurAdmin"])){
    $utilisateurAdmin = $_POST["utilisateurAdmin"];
}
if(isset($_POST["utilisateurAction"])){
    $utilisateurAction = $_POST["utilisateurAction"];
}

?>



<p><a href="../index.php">ACCUEIL</a></p>

<div>
    <div>
        <h3>blog</h3>
        <form action="" method="post" name="blogForm" id="blogForm" class="form">
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
        <form action="" method="post" name="codesForm" id="codesForm" class="form">
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
        <form action="" method="post" name="imagesForm" id="imagesForm" class="form">
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
        <form action="" method="post" name="produitForm" id="produitForm" class="form">
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
        <form action="" method="post" name="promosForm" id="promosForm" class="form">
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
        <form action="" method="post" name="reservationForm" id="reservationForm" class="form">
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
        <form action="" method="post" name="utilisateurForm" id="utilisateurForm" class="form">
            <label for="utilisateurNom">Nom de l'utilisateur : </label>
            <input type="text" placeholder="nom" name="utilisateurNom" id="utilisateurNom"/>

            <label for="utilisateurPrenom">Prenom de l'utilisateur : </label>
            <input type="text" placeholder="prenom" name="utilisateurPrenom" id="utilisateurPrenom"/>

            <label for="utilisateurMail">Mail de l'utilisateur : </label>
            <input type="mail" placeholder="mail" name="utilisateurMail" id="utilisateurMail"/>

            <label for="utilisateurPassword">mot de passe de l'utilisateur : </label>
            <input type="text" placeholder="mot de passe" name="utilisateurPassword" id="utilisateurPassword"/>

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

<script>
    console.log("pop");
    let forms = document.querySelectorAll(".form");

    for(let form of forms){
        form.reset();
        console.log(form);
    }
</script>

<?php 
//Troisieme balise PHP pour include le(s) fichier(s) du footer
//–––––––––––––––

//include BDD disconnect
include("../db/db_disconnect.php");

//Include du footer
include("footer.php");

?>