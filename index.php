<?php 
//Premiere balise PHP pour includes les principaux fichiers (Head,db_connect...) ainsi que pour s'occuper des sessions (visiteur,admin)
//–––––––––––––––

//Include du head
include("pages/head_index.php");

?>
<?php 
//Deuxieme balise PHP : La page
//–––––––––––––––


//Header de la page index page
$html_header = "<header id='header_index'>\n";

$html_header .= "<div id='logo???'>\n";
$html_header .= "</div>\n";

$html_header .= "<span> MENU SIMPLE POUR POUVOIR CO LES PAGES AU CLIQUE : A MODFIER</span>\n";
$html_header .= "<div id='menu_index'>\n";
$html_header .= "<ul id='menu'>\n";

$html_header .= "<li><a href='pages/parachutisme_histoire.php'>L'histoire du parachutisme</a></li>\n";
$html_header .= "<li><a href='pages/processus_de_saut.php'>Processus de saut</a></li>\n";
$html_header .= "<li><a href='pages/faq_tandem.php'>FAQ Tandem</a></li>\n";
$html_header .= "<li><a href='pages/reseaux.php'>Nos réseaux</a></li>\n";
$html_header .= "<li><a href='pages/promotion.php'>Nos promotions actuels</a></li>\n";
$html_header .= "<li><a href='pages/prestations.php'>Prestations / Offres</a></li>\n";
$html_header .= "<li><a href='pages/avis_clients.php'>Avis clients</a></li>\n";
$html_header .= "<li><a href='pages/panier.php'>Panier</a></li>\n";
$html_header .= "<li><a href='pages/confirmation_commande.php'>Confirmation de commande</a></li>\n";
$html_header .= "<li><a href='pages/actualites.php'>Actualites</a></li>\n";
$html_header .= "<li><a href='pages/test_crud.php'>TEST</a></li>\n";

$html_header .= "</ul>\n";
$html_header .= "</div>\n";

$html_header .= "</header>\n";

echo($html_header);

?>

<?php 
//Troisieme balise PHP pour include le(s) fichier(s) du footer
//–––––––––––––––

//Include du footer
include("pages/footer_index.php");

?>