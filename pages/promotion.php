<?php 
//Premiere balise PHP pour includes les principaux fichiers (Head,db_connect...) ainsi que pour s'occuper des sessions (visiteur,admin)
//–––––––––––––––

//Include du head
include("head.php");

?>

<header id="header_codes">
    <h1>Nos codes promos</h1>
    <p>Retrouver ci-dessous les codes promos actuels</p>
</header>
<main id="main_codes">
    <div id="aff_codes"></div>

</main>
<script src="../scripts/axios.min.js"></script>
<script src="../scripts/codes.js" defer></script>


<?php 
//Troisieme balise PHP pour include le(s) fichier(s) du footer
//–––––––––––––––

//Include du footer
include("footer.html");

?>