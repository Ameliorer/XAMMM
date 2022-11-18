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
$html_header .= "<li><a href='pages/%20legal_notice.php'>Mentions Légales</a></li>\n<br>";
$html_header .= "<li><a href='pages/CGV.php'>Conditions Générales de Vente</a></li>\n<br>";

$html_header .= "<li><a href='pages/test_crud.php'>TEST</a></li>\n";
<<<<<<< HEAD
$html_header .= "<li><a href='pages/testCrudUserCreate.php'>Test User CRUD Create</a></li>\n";
$html_header .= "<li><a href='pages/testCrudUserRead.php'>Test User CRUD Read</a></li>\n";
$html_header .= "<li><a href='pages/testCrudUserUpdate.php'>Test User CRUD Update</a></li>\n";
$html_header .= "<li><a href='pages/testCrudUserDelete.php'>Test User CRUD Delete</a></li>\n";
$html_header .= "<li><a href='pages/testCrudBlogCreate.php'>Test Blog CRUD Create</a></li>\n";
$html_header .= "<li><a href='pages/testCrudBlogRead.php'>Test Blog CRUD Read</a></li>\n";
$html_header .= "<li><a href='pages/testCrudBlogUpdate.php'>Test BlogCRUD Update</a></li>\n";
$html_header .= "<li><a href='pages/testCrudBlogDelete.php'>Test Blog CRUD Delete</a></li>\n";
$html_header .= "<li><a href='pages/testUploadImage.php'>Test Upload Image</a></li>\n";
=======

>>>>>>> dbc40e496af3eae391316db368295ce9f38e86fe

$html_header .= "</ul>\n";
$html_header .= "</div>\n";

$html_header .= "</header>\n";

echo($html_header);

?>

<main>
    <p>Fondée en 1999, l’école professionnelle de parachutisme Diagonale s’est installée sur la plateforme de Gap Tallard pour bénéficier d’une météo exceptionnelle (Pas de mistral et 300 jours de soleil par an), d’un superbe panorama montagnard et d’un espace aérien dédié au parachutisme (pas de ligne commerciale).</p>
    <p>L’équipe Diagonale peut, dans ces conditions, de mars à novembre, atteindre ses  objectifs : vous faire partager sa passion en toute sécurité.</p>
    <p>Pierre est moniteur de parachutisme (titulaire du Brevet d'Etat Educateur Sportif 1° degré) depuis 1997. Avec bientôt 20 ans d'activité, il totalise aujourd'hui 21.000 sauts dont près de 16.000 sauts d'enseignement. Plus de 5000 sauts en tandem et plus de  1000 élèves  en stage PAC.</p>
    <p>Pierre a fait partie de l'équipe des Souls Flyers et participe avec la Fédération Française de Parachutisme à la formation des moniteurs depuis 2002. Vous pouvez sauter avec lui en toute confiance !!!</p>
    <p>Il totalise aujourd'hui plus de 20.000 sauts et a exploré toutes les facettes du parachutisme : progression, loisir, enseignement, compétition (sky-surf et free-fly), prise de vue professionnelle, sauts de démonstration (Soul flyers), formation au monitorat (avec la fédération Française de Parachutisme), soufflerie (Tunnelinstructor A, A+, B).</p>
    <p>Avec son experience de 20 ans d'enseignement, il peut vous faire progresser quelque soit votre niveau et la discipline souhaitée (Progression Brevet A, B, B2 (vol relatif), Bi4 (free-fly tête en haut), B4 (free-fly tête en bas), formation au monitorat et soufflerie).</p>
</main>

<?php 
//Troisieme balise PHP pour include le(s) fichier(s) du footer
//–––––––––––––––

//Include du footer
include("pages/footer_index.php");

?>