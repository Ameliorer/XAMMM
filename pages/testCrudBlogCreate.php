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

?>

<?php
// ---  envoie données BDD  ---

//var_dump($_POST);

//users
if(isset($_POST["id"])){
    $id = $_POST["id"];
}

if(isset($_POST["title"])){
    $title = $_POST["title"];
}

if(isset($_POST["content"])){
    $content = $_POST["content"];
}

if(isset($_POST["datePost"])){
    $datePost = $_POST["datePost"];
}

?>

<p><a href="../index.php">INDEX</a></p>


<div>
    <div>
        <h3>CREATE POST</h3>
        <form action="" method="post" name="FormBlog" id="blogForm" class="form">
            <label for="title">Titre du post : </label>
            <input type="text" placeholder="titre" name="title" id="title"/>

            <label for="content">Contenu du post : </label>
            <textarea name="content" rows="3" cols="30" id="content" placeholder="Contenu"></textarea>

            <label for="datePost">Date du Post : </label>
            <input type="date" placeholder="date" id="datePost" name="datePost" value="<?php echo date('Y-m-d'); ?>"/>

            <label for="submit">valider : </label>
            <input type="submit" name="submitCreate" id="submit">
        </form>
    </div>
</div>


<?php

if (!empty($_POST["title"])&&!empty($_POST["content"])&&!empty($_POST["datePost"])){

    $res = CreateBlog($conn, $title, $content, $datePost);

    if(!$res){
        echo ($_POST["title"]);
        echo ($_POST["content"]);
        echo ($_POST["datePost"]);
        echo("Something wrong append...<br>Did you complet all the cases ?");
    }
    else {
        echo ("Le post à bien été ajouté.");

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