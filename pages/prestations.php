<?php 
//Premiere balise PHP pour includes les principaux fichiers (Head,db_connect...) ainsi que pour s'occuper des sessions (visiteur,admin)
//–––––––––––––––

//Include du head
include("head.php");
include("../db/db_connect.php");
include("../crud/crud_products.php");

?>
<header>
    <h1>Nos prestations / Offres</h1>
    <p>Retrouver ci-dessous nos prestations et offres ! </p>
</header>
<main id='main_products'>
    <div id='aff_products'></div>
</main>
<script src="../scripts/axios.min.js"></script>
<script src="../scripts/products.js" defer></script>


<?php 
//Troisieme balise PHP pour include le(s) fichier(s) du footer
//–––––––––––––––

//Include du footer
include("footer.php");

?>