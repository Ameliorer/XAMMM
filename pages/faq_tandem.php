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

<header id="headerFAQ">
    <h1>FAQ</h1>
    <h4>Des questions ? Peut-être que les réponses existent déja :</h4>
</header>

<main>
    <div id="FAQContent"></div>
</main>

<script src="../scripts/axios.min.js" ></script> 
<script src="../scripts/faq.js" defer></script>
<?php 
//Troisieme balise PHP pour include le(s) fichier(s) du footer
//–––––––––––––––

//Include du footer
include("footer.php");

?>