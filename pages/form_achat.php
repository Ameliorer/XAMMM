<?php 
//Premiere balise PHP pour includes les principaux fichiers (Head,db_connect...) ainsi que pour s'occuper des sessions (visiteur,admin)
//–––––––––––––––

//Include du head
$title = 'form_achat';
include("head.php");
include("../db/db_connect.php");
include("../crud/crud_users.php");
include("../crud/crud_products.php");

if(isset($_SESSION['id'])){
    $idUser = $_SESSION['id'];
    $user = selectUser($conn, $idUser);
    $nameProduct = $_GET["name"];
    $produit = SelectProduit($conn, $nameProduct);
    $today = date('Y-m-d');
}else{
    if($_GET["lastPage"] == "/~XAMMM/pages/prestations.php"){
        $lastPage = $_GET["lastPage"];
    }
    echo("<script type='text/javascript'> window.location.replace('/~XAMMM/inc/form_connection.php?lastPage=$lastPage') </script>");
}
?>
<script src='../scripts/axios.min.js'></script>

<div>
    <h3><?php echo $nameProduct; ?></h3>
    <h4>Prix : <?php echo $produit["price"]; ?></h4>
    <div>
    <p>votre taille doit être comprise entre <?php echo $produit["minHeight"]; ?>cm et <?php echo $produit["maxHeight"]; ?>cm</p>
    <p>votre poids doit être comprise entre <?php echo $produit["minWeight"]; ?>Kg et <?php echo $produit["maxWeight"]; ?>Kg</p>
    <p>votre age doit être comprise entre <?php echo $produit["minAge"]; ?>ans et <?php echo $produit["maxAge"]; ?>ans</p>
    </div>
    <span id="result"></span>
    <form action="" method="post" name="reservationForm" id="reservationForm" class="form">
        <label for="reservationTailleUser">Veulllez confirmer votre taille : </label>
        <input type="number" value="<?php echo $user["height"]; ?>" name="reservationTailleUser" id="reservationTailleUser"/>

        <label for="reservationPoidsUser">Veuillez confirmer votre poids : </label>
        <input type="number" value="<?php echo $user["weight"]; ?>" name="reservationPoidsUser" id="reservationPoidsUser"/>

        <label for="reservationAgeUser">veuillez confirmer vore age : </label>
        <input type="number" value="<?php echo $user["age"]; ?>" name="reservationAgeUser" id="reservationAgeUser"/>

        <label for="reservationDate">veuillez donner une date : </label>
        <input type="date" value="<?php echo $today; ?>" name="reservationDate" id="reservationDate"/>

        <label for="reservationSubmit">valider : </label>
        <input type="submit" name="reservationSubmit" id="reservationSubmit">
    </form>
</div>

<script type='text/javascript'>
    var PHPdata = <?php echo(json_encode(array("idUser" => $idUser, "nameProduct" => $nameProduct, "today" => $today))); ?>;
</script>
<script type="text/javascript" src="../scripts/form_achat.js" defer></script>

<?php 
//Troisieme balise PHP pour include le(s) fichier(s) du footer
//–––––––––––––––

include("../db/db_disconnect.php");

//Include du footer
include("footer.html");

?>