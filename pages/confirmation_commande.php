<?php 
//Premiere balise PHP pour includes les principaux fichiers (Head,db_connect...) ainsi que pour s'occuper des sessions (visiteur,admin)
//–––––––––––––––

//Include du head
include("head.php");

if(isset($_SESSION['id'])){
    $idUser = $_SESSION['id'];
}else{
    echo("<script type='text/javascript'> window.location.replace('/~XAMMM/inc/form_connection.php') </script>");
}

?>

<header>
    <h1>Votre Panier</h1>
</header>
<main id='main_panier'>
    <div id='aff_panier'></div>
</main>
<script type='text/javascript'>
    var PHPdata = <?php echo(json_encode(array("idUser" => $idUser))); ?>;
</script>
<script src="../scripts/axios.min.js"></script>
<script src="../scripts/panier.js" defer></script>

<?php 
//Troisieme balise PHP pour include le(s) fichier(s) du footer
//–––––––––––––––

//Include du footer
include("footer.php");

?>