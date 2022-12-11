<?php 
//Premiere balise PHP pour includes les principaux fichiers (Head,db_connect...) ainsi que pour s'occuper des sessions (visiteur,admin)
//–––––––––––––––

//Include du head
$title = "Actualités";
include("head.php");
?>

<script src='../scripts/axios.min.js'></script>
<script src='../scripts/actualites.js' defer></script>

<div><a href='../index.php'>ACCUEIL</a></div>

<main></main>

<?php 
//Troisieme balise PHP pour include le(s) fichier(s) du footer
//–––––––––––––––

//Include du footer
include("footer.php");

?>