<?php 
//Premiere balise PHP pour includes les principaux fichiers (Head,db_connect...) ainsi que pour s'occuper des sessions (visiteur,admin)
//–––––––––––––––
include("../db/db_connect.php");
include("../pages/head.php");
include("../crud/crud_images.php");
include("../lib/functions_img.php");


?>

<header>
    <h1>Page [admin] pour ajouter des images</h1>
    <p>Vous pouvez ajouter ci-dessous les images que vous souhaitez mettre dans la base de données</p>
</header>
<main>
    <div>
        <form id='form_place_img' class="form"  method='post' action=''>
            <label for="chooseImgs">Selectionner une (des) image(s) :</label>
            <input name='chooseImgs' type='file' multiple>
            <input type='submit' name='submit'>
        </form>
    </div>
</main>

<?php 

//Let's retrieve the images of the database
$imgsInDB = SelectAllImages($conn);

//Treatment of the image :
$imgNamePost = $_POST['chooseImgs'];

$newImgName = createNewNameImg($imgNamePost);
//$newImgName = "azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN0123456789+!§?&é(-è_çà)=}]@|[{#£¤*µù%<>";

//If the name already exist in the DB then we change the name
if(img_is_existing($newImgName,$imgsInDB)){
    $newImgName = createNewNameImg($newImgName);
    echo("IMG ALREADY EXIST");
}
else if (CreateImage($conn, $newImgName, 1)){
    echo("<br>IMAGE CREE");
}
else{
    echo("<br>");
    echo($newImgName);
    echo("<br>");
    echo(count($imgsInDB)+1);
    echo("<br>");
    echo("<br>IMAGE NON CREE DANS LA BASE");
}

?>



<?php 
//Troisieme balise PHP pour include le(s) fichier(s) du footer
//–––––––––––––––

//Include du footer
include("footer.php");

?>