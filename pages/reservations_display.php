<?php
//Premiere balise PHP pour includes les principaux fichiers (Head,db_connect...) ainsi que pour s'occuper des sessions (visiteur,admin)
//–––––––––––––––

//Include du head
$title = "Réservations";
include("head.php");
echo "<script src='../scripts/axios.min.js'></script>\n";
echo "<script src='../scripts/reservations_display.js' defer></script>\n";
?>

<?php
//Deuxieme balise PHP : La page
//–––––––––––––––

$html_accueil = "<div><a href='../index.php'>ACCUEIL</a></div>";
echo($html_accueil);
?>

    <main>
        <form action="" method="post" name="reservationForm" id="reservationForm" class="form">
            <label for="date">Date de la réservation : </label>
            <input type="date" placeholder="date" name="date" id="date" value="<?php echo date('Y-m-d'); ?>"/>

            <label for="reservationSubmit">valider : </label>
            <input type="submit" name="reservationSubmit" id="reservationSubmit">
        </form>
    </main>

<?php
//Troisieme balise PHP pour include le(s) fichier(s) du footer
//–––––––––––––––

//Include du footer
include("footer.php");

?>