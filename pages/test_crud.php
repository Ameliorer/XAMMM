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
include("../crud/crud_discounts.php");
include("../crud/crud_images.php");
include("../crud/crud_products.php");
include("../crud/crud_reservations.php");
include("../crud/crud_users.php");
include("../crud/crud_opinion.php")

?>

<?php
// ---  envoie données BDD  ---

//var_dump($_POST);

//blog
if(isset($_POST["blogId"])){
    $blogId = $_POST["blogId"];
}

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

//CreateBlog debugging information
if(isset($_POST["blogTitle"]) && isset($_POST["blogContent"]) && isset($_POST["blogDate"]) && $blogAction == 'create'){
    if(CreateBlog($conn, $blogTitle, $blogContent, $blogDate)){
        echo("Blog is created and stocked in the DB");
    }
    else{
        echo("Creation of the Blog FAILED");
    }
}

//UpdateBlog debugging information
if(isset($_POST["blogId"]) && isset($_POST["blogTitle"]) && isset($_POST["blogContent"]) && isset($_POST["blogDate"]) && $blogAction == 'update'){
    if(UpdateBlog($conn,$blogId, $blogTitle, $blogContent, $blogDate)){
        echo("Blog is update and stocked in the DB");
    }
    else{
        echo("Update of the Blog FAILED");
    }
}

//DeleteBlog debugging information
if(isset($_POST["blogId"]) && $blogAction == 'delete'){
    if(DeleteBlog($conn, $blogId)){
        echo("Blog is deleted from the DB");
    }
    else{
        echo("Delete of the Blog FAILED");
    }
}

//SelectBlog debugging information
if(isset($_POST["blogId"]) && $blogAction == 'select'){
    if($blog = SelectBlog($conn, $blogId)){
        echo("Blog with the id $blogId is $blog[content]");
    }
    else{
        echo("Selection of the Blog FAILED");
    }
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
$codesAction = "";
if(isset($_POST["codesAction"])){
    $codesAction = $_POST["codesAction"];
}

// --- codes create
if($codesCodes != "" and isset($codesIdType) and isset($codesDateD) and isset($codesDateF)  and $codesAction == "create"){
    if(CreateCodes($conn, $codesCodes, $codesIdType, $codesDateD, $codesDateF)){
        echo "<p>create codes success</p>";
    }else{
        echo "<p>create codes failure</p>";
    }
}

// --- codes update
if($codesCodes != "" and isset($codesIdType) and isset($codesDateD) and isset($codesDateF) and $codesAction == "update"){
    if(UpdateCodes($conn, $codesCodes, $codesIdType, $codesDateD, $codesDateF)){
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

//CreateImage debugging information
if(isset($_POST["imagesNom"]) && isset($_POST["imagesIdBlog"]) && $imagesAction == 'create'){
    if(CreateImage($conn, $imagesNom, $imagesIdBlog)){
        echo("Image is created and stocked in the DB");
    }
    else{
        echo("Creation of the Image FAILED");
    }
}

//UpdateImage debugging information
if(isset($_POST["imagesNom"]) && isset($_POST["imagesIdBlog"]) && $imagesAction == 'update'){
    if(UpdateImage($conn,$imagesNom, $imagesIdBlog)){
        echo("Image is update and stocked in the DB");
    }
    else{
        echo("Update of the Image FAILED");
    }
}

//DeleteImage debugging information
if(isset($_POST["imagesNom"]) && $imagesAction == 'delete'){
    if(DeleteImage($conn, $imagesNom)){
        echo("Image is deleted from the DB");
    }
    else{
        echo("Delete of the Image FAILED");
    }
}

//SelectImage debugging information
if(isset($_POST["imagesNom"]) && $imagesAction == 'select'){
    if($image = SelectImage($conn, $imagesNom)){
        echo("Image for the $blog[idblog] is selected");
    }
    else{
        echo("Selection of the Image FAILED");
    }
}


//opinion
if(isset($_POST["iduser"])){
    $iduser = $_POST["iduser"];
}
if(isset($_POST["id"])){
    $id = $_POST["id"];
}
if(isset($_POST["text"])){
    $text = $_POST["text"];
}
if(isset($_POST["grade"])){
    $grade = $_POST["grade"];
}
if(isset($_POST["opinionAction"])){
    $opinionAction = $_POST["opinionAction"];
}


//CreateOpinion debugging information
if(isset($_POST["iduser"]) && isset($_POST["text"]) && isset($_POST["grade"]) && $opinionAction == 'create'){
    if(CreateOpinion($conn, $iduser, $text, $grade)){
        echo("Opinion is created and stocked in the DB");
    }
    else{
        echo("Creation of the opinion FAILED");
    }
}

//UpdateOpinion debugging information
if(isset($_POST["id"]) && isset($_POST["iduser"]) && isset($_POST["text"]) && isset($_POST["grade"]) && $opinionAction == 'update'){
    if(UpdateOpinion($conn, $id, $iduser, $text, $grade)){
        echo("Opinion is update and stocked in the DB");
    }
    else{
        echo("Update of the opinion FAILED");
    }
}

//DeleteOpinion debugging information
if(isset($_POST["iduser"]) && $opinionAction == 'delete'){
    if(DeleteOpinion($conn, $iduser)){
        echo("Opinion is deleted from the DB");
    }
    else{
        echo("Delete of the opinion FAILED");
    }
}

//SelectOpinion debugging information
if(isset($_POST["iduser"]) && $opinionAction == 'select'){
    if($opinion = SelectOpinion($conn, $iduser)){
        echo("Opinion for the $opinion[iduser] is selected");
    }
    else{
        echo("Selection of the opinion FAILED");
    }

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

//CreateProduit debugging information
if(isset($produitNom) && isset($produitPrix) && isset($produitDateD) && isset($produitDateF) && isset($produitAgeMin) && isset($produitAgeMax) && isset($produitPoidsMin) && isset($produitPoidsMax) && isset($produitTailleMin) && isset($produitTailleMax) && $produitAction == "create"){
    if(CreateProduit($conn,$produitNom,$produitPrix,$produitDateD,$produitDateF,$produitAgeMin,$produitAgeMax,$produitPoidsMin,$produitPoidsMax,$produitTailleMin,$produitTailleMax)){
        echo("Product is created and stocked in the DB");
    }
    else{
        echo("Creation of the product FAILED");
    }

}

//UpdateProduit debugging information
if(isset($produitNom) && isset($produitPrix) && isset($produitDateD) && isset($produitDateF) && isset($produitAgeMin) && isset($produitAgeMax) && isset($produitPoidsMin) && isset($produitPoidsMax) && isset($produitTailleMin) && isset($produitTailleMax) && $produitAction == "update"){
    if(UpdateProduit($conn,$produitNom,$produitPrix,$produitDateD,$produitDateF,$produitAgeMin,$produitAgeMax,$produitPoidsMin,$produitPoidsMax,$produitTailleMin,$produitTailleMax)){
        echo("Product named : '$produitNom' is updated in the DB");
    }
    else{
        echo("Update of the product FAILED : Is the product in the DB?");
    }

}
//DeleteProduit debugging information
if(isset($produitNom) && $produitAction == "delete"){
    if(DeleteProduit($conn,$produitNom)){
        echo("Product named : '$produitNom' is deleted from the DB");
    }
    else{
        echo("Delete of the product FAILED | Is the product named : '$produitNom' in the DB?");
    }

}
//SelectProduit debugging information
if(isset($produitNom) && $produitAction == "select"){
    if($produit = SelectProduit($conn,$produitNom)){
        echo("Product named : '$produitNom' is : $produit[prix] ...ect");
    }
    else{
        echo("Selection FAILED| Is the product named : '$produitNom' in the DB?");
    }

}

//promos
if(isset($_POST["Id"])){
    $id = $_POST["Id"];
}

if(isset($_POST["productId"])){
    $idProduct = $_POST["productId"];
}
if(isset($_POST["promosNom"])){
    $promosNom = $_POST["promosNom"];
}

if(isset($_POST["percentage"])){
    $percentage = $_POST["percentage"];
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

//CreateDiscount debugging information
if(isset($_POST["productId"]) && isset($_POST["promosNom"]) && isset($_POST["promosDateD"]) && isset($_POST["promosDateF"]) && isset($_POST["promosDescription"]) && $promosAction == 'create'){
    if(CreateDiscount($conn, $idProduct, $promosNom, $percentage, $promosDateD, $promosDateF, $promosDescription)){
        echo("Discount is created and stocked in the DB");
    }
    else{
        echo("Creation of the Discount FAILED");
    }
}

//UpdateDiscount debugging information
if(isset($_POST["Id"]) && isset($_POST["imagesNom"]) && isset($_POST["imagesIdBlog"]) && $imagesAction == 'update'){
    if(UpdateDiscount($conn,$id, $idProduct, $promosNom, $percentage, $promosDateD, $promosDateF, $promosDescription)){
        echo("Discount is update and stocked in the DB");
    }
    else{
        echo("Update of the Discount FAILED");
    }
}

//DeleteDiscount debugging information
if(isset($_POST["Id"]) && $imagesAction == 'delete'){
    if(DeleteDiscount($conn, $id)){
        echo("Discount is deleted from the DB");
    }
    else{
        echo("Delete of the Discount FAILED");
    }
}

//SelectDiscount debugging information
if(isset($_POST["Id"]) && $imagesAction == 'select'){
    if($discount = SelectImage($conn, $id)){
        echo("Discount for the product $discount[idProduct] is selected");
    }
    else{
        echo("Selection of the Discount FAILED");
    }
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
if(isset($_POST["reservationIdProduit"])){
    $reservationIdProduit = $_POST["reservationIdProduit"];
}
if(isset($_POST["reservationDate"])){
    $reservationDate = $_POST["reservationDate"];
}
if(isset($_POST["reservationAction"])){
    $reservationAction = $_POST["reservationAction"];
}


//CreateReservation debugging information
if(isset($reservationIdUser) && isset($reservationTailleUser) && isset($reservationPoidsUser) && isset($reservationAgeUser) && isset($reservationIdProduit) && isset($reservationDate) && $reservationAction == "create"){
    if(CreateReservation($conn,$reservationIdUser,$reservationTailleUser,$reservationAgeUser,$reservationIdProduit,$reservationDate)){
        echo("Reservation is created and stocked in the DB");
    }
    else{
        echo("Creation of the Reservation FAILED");
    }

}

//UpdateReservation debugging information
if(isset($reservationIdUser) && isset($reservationTailleUser) && isset($reservationAgeUser) && isset($reservationIdProduit) && isset($reservationDate) && $reservationAction == "update"){
    if(UpdateReservation($conn,$reservationIdUser,$reservationTailleUser,$reservationAgeUser,$reservationIdProduit,$reservationDate)){
        echo("Reservation named : '$reservationIdUser' is updated in the DB");
    }
    else{
        echo("Update of the Reservation FAILED : Is the Reservation in the DB?");
    }

}
//DeleteReservation debugging information
if(isset($reservationIdUser) && $reservationAction == "delete"){
    if(DeleteReservation($conn,$reservationIdUser)){
        echo("Reservation named : '$reservationIdUser' is deleted from the DB");
    }
    else{
        echo("Delete of the Reservation FAILED | Is the Reservation named : '$reservationIdUser' in the DB?");
    }

}
//SelectReservation debugging information
if(isset($reservationIdUser) && $reservationAction == "select"){
    if($produit = SelectReservation($conn,$reservationIdUser)){
        echo("Reservation named : '$reservationIdUser' is : $reservation[tailleUser] ...ect");
    }
    else{
        echo("Selection FAILED| Is the Reservation named : '$reservationIdUser' in the DB?");
    }

}


//users
if(isset($_POST["idUser"])){
    $idUser = $_POST["idUser"];
}

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

//CreateUser debugging information
if(isset($_POST["utilisateurNom"]) && isset($_POST["utilisateurPrenom"]) && isset($_POST["utilisateurMail"]) && isset($_POST["utilisateurPassword"]) && isset($_POST["utilisateurNumTel"]) && isset($_POST["utilisateurTaille"]) && isset($_POST["utilisateurPoids"]) && isset($_POST["utilisateurAge"]) && isset($_POST["utilisateurAdmin"]) && $utilisateurAction == "create"){
    if(CreateUser($conn,$utilisateurNom,$utilisateurPrenom,$utilisateurMail,$utilisateurPassword,$utilisateurNumTel,$utilisateurTaille,$utilisateurPoids,$utilisateurAge,$utilisateurAdmin)){
        echo("User is created and stocked in the DB");
    }
    else{
        echo("Creation of the User FAILED");
    }
}

//UpdateUser debugging information
if(isset($_POST["utilisateurNom"]) && isset($_POST["utilisateurPrenom"]) && isset($_POST["utilisateurMail"]) && isset($_POST["utilisateurPassword"]) && isset($_POST["utilisateurNumTel"]) && isset($_POST["utilisateurTaille"]) && isset($_POST["utilisateurPoids"]) && isset($_POST["utilisateurAge"]) && isset($_POST["utilisateurAdmin"]) && $utilisateurAction == "update"){
    if(UpdateUser($conn,$idUser,$utilisateurNom,$utilisateurPrenom,$utilisateurMail,$utilisateurPassword,$utilisateurNumTel,$utilisateurTaille,$utilisateurPoids,$utilisateurAge,$utilisateurAdmin)){
        echo("User is updated in the DB");
    }
    else{
        echo("Update of the User FAILED ");
    }
}
//DeleteUser debugging information
if(isset($_POST["idUser"]) && $utilisateurAction == "delete"){
    if(DeleteUser($conn,$idUser)){
        echo("User is deleted from the DB");
    }
    else{
        echo("Delete of the User FAILED");
    }
}
//SelectUser debugging information
if(isset($_POST["idUser"]) && $utilisateurAction == "select"){
    if($user = SelectUser($conn,$idUser)){
        echo("User named $user[lastname] ...ect");
    }
    else{
        echo("Selection of user FAILED ");
    }
}

?>



<p><a href="../index.php">ACCUEIL</a></p>

<div>
    <div>
        <h3>blog</h3>
        <form action="" method="post" name="blogForm" id="blogForm" class="form">
            <label for="blogId">Id du blog (pour update / delete / select): </label>
            <input type="int" placeholder="id" id="blogId" name="blogId"/>

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
            <input type="date" placeholder="date fin" name="codesDateF" id="codesDateF"/>b

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
        <h3>Opinions</h3>
        <form action="" method="post" name="opinionForm" id="opinionForm" class="form">
            <label for="iduser">Id de l'utilisateur : </label>
            <input type="number" placeholder="id user" name="iduser" id="iduser"/>
            
            <label for="text">Texte de l'opinion : </label>
            <input type="text" placeholder="texte" name="text" id="text"/>

            <label for="grade">nombre d'étoiles : </label>
            <input type="number" placeholder="entre 1 et 5" name="grade" id="grade"/>
            

            <label for="opinionAction">Action à faire : </label>
            <select name="opinionAction" id="opinionAction">
                <option value="create">create</option>
                <option value="update">update</option>
                <option value="delete">delete</option>
                <option value="select">select</option>
            </select>

            <label for="opinionSubmit">Valider : </label>
            <input type="submit" name="opinionSubmit" id="opinionSubmit">
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
        <h3>Discounts</h3>
        <form action="" method="post" name="promosForm" id="promosForm" class="form">
            <label for="Id">Id (Pour Update / Delete / Select): </label>
            <input type="int" placeholder="" name="Id" id="Id"/>

            <label for="productId">Id du produit lié: </label>
            <input type="int" placeholder="" name="productId" id="productId"/>

            <label for="promosNom">Nom de la promo : </label>
            <input type="text" placeholder="nom" name="promosNom" id="promosNom"/>

            <label for="percentage">Pourcentage: </label>
            <input type="int" placeholder="" name="percentage" id="percentage"/>

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
            <input type="number" placeholder="id produit" name="reservationIdProduit" id="reservationIdProduit"/>

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
            <label for="idUser">id user (Pour Update / Delete / Select) : </label>
            <input type="int" placeholder="" name="idUser" id="idUser"/>

            <label for="utilisateurNom">Nom de l'utilisateur : </label>
            <input type="text" placeholder="nom" name="utilisateurNom" id="utilisateurNom"/>

            <label for="utilisateurPrenom">Prenom de l'utilisateur : </label>
            <input type="text" placeholder="prenom" name="utilisateurPrenom" id="utilisateurPrenom"/>

            <label for="utilisateurMail">Mail de l'utilisateur : </label>
            <input type="mail" placeholder="mail" name="utilisateurMail" id="utilisateurMail"/>

            <label for="utilisateurPassword">mot de passe de l'utilisateur : </label>
            <input type="password" placeholder="mot de passe" name="utilisateurPassword" id="utilisateurPassword"/>

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

                <option value=0>faux</option>
                <option value=1>vrai</option>

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
//empty POST
unset($_POST);
$_POST = array();

//Troisieme balise PHP pour include le(s) fichier(s) du footer
//–––––––––––––––

//include BDD disconnect
include("../db/db_disconnect.php");

//Include du footer
include("footer.php");

?>