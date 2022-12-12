<?php 

//Include du head
$title = "Avis";
include("head.php");
echo "<script src='../scripts/axios.min.js'></script>\n";
echo "<script src='../scripts/avis.js' defer></script>\n";


?>

<main> 
<div id="boutons">
<button type="button" id="button5stars">
   <span> 5 étoiles </span>
</button>

<button type="button" id="button4stars">
<span> 4 étoiles</span>
</button>

<button type="button" id="button3stars">
<span> 3 étoiles</span>
</button>

<button type="button" id="button2stars">
<span> 2 étoiles</span>
</button>

<button type="button" id="button1stars">
<span>  1 étoiles</span>
</button>

<button type="button" id="all">
<span>  Tous avis </span>
</button>
</div>

<div id="avis">
</div>

</main>

<?php 
//Troisieme balise PHP pour include le(s) fichier(s) du footer
//–––––––––––––––

//Include du footer
include("footer.html");

?>