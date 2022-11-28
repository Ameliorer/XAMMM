<?php 

//Include du head
$title = "Avis";
include("head.php");
echo "<script src='../scripts/axios.min.js'></script>\n";
echo "<script src='../scripts/avis.js' defer></script>\n";


?>

<?php 
//Deuxieme balise PHP : La page
//–––––––––––––––

$html_acceuil = "<div><a href='../index.php'>ACCEUIL</a></div>";
echo($html_acceuil);
?>

<main> 
<button type="button" id="button5stars">
    5 étoiles
</button>

<button type="button" id="button4stars">
    4 étoiles
</button>

<button type="button" id="button3stars">
    3 étoiles
</button>

<button type="button" id="button2stars">
    2 étoiles
</button>

<button type="button" id="button1stars">
    1 étoiles
</button>

<div id="avis">
</div>

</main>

<?php 
//Troisieme balise PHP pour include le(s) fichier(s) du footer
//–––––––––––––––

//Include du footer
include("footer.php");

?>