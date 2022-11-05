<?php 
//Premiere balise PHP pour includes les principaux fichiers (Head,db_connect...) ainsi que pour s'occuper des sessions (visiteur,admin)
//–––––––––––––––

//Include du head
include("head.php");

?>

<?php 
//Deuxieme balise PHP : La page
//–––––––––––––––

$html_acceuil = "<div><a href='../index.php'>ACCEUIL</a></div>";
echo($html_acceuil);
?>


<?php 
//Troisieme balise PHP pour include le(s) fichier(s) du footer
//–––––––––––––––

//Include du footer
include("footer.php");

?>