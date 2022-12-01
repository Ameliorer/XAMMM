<?php
session_start();

// Default title
if(!(isset($title))){
    $title = "Diagonale Chute Libre";
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <?php
    echo("<title>$title</title>");
    ?>
    <link rel='stylesheet' href='/~XAMMM/styles/style.css' />
    <script src='/~XAMMM/scripts/main.js' defer></script>
</head>
<body>
    <header id='header'>
        <ul id='headerMenusWrapper'>
            <span id='logo'></span>

            <ul class='headerMenu'>
                <span class='headerMenuTitle'>MENU</span>
                <ul class='headerMenuList'>
                    <li><a href='/~XAMMM/pages/parachutisme_histoire.php'>L'histoire du parachutisme</a></li>
                    <li><a href='/~XAMMM/pages/processus_de_saut.php'>Processus de saut</a></li>
                    <li><a href='/~XAMMM/pages/faq_tandem.php'>FAQ Tandem</a></li>
                    <li><a href='/~XAMMM/pages/reseaux.php'>Nos réseaux</a></li>
                    <li><a href='/~XAMMM/pages/promotion.php'>Nos promotions actuels</a></li>
                    <li><a href='/~XAMMM/pages/prestations.php'>Prestations / Offres</a></li>
                    <li><a href='/~XAMMM/pages/avis_clients.php'>Avis clients</a></li>
                    <li><a href='/~XAMMM/pages/panier.php'>Panier</a></li>
                    <li><a href='/~XAMMM/pages/confirmation_commande.php'>Confirmation de commande</a></li>
                    <li><a href='/~XAMMM/pages/actualites.php'>Actualites</a></li>
                    <li><a href='/~XAMMM/pages/legal_notice.php'>Mentions Légales</a></li>
                    <li><a href='/~XAMMM/pages/place_img_in_db.php'>➜➜➜ Place Images [admin]</a></li>
                    <li><a href='/~XAMMM/pages/CGV.php'>Conditions Générales de Vente</a></li>

                    <li><a href='/~XAMMM/pages/test_crud.php'>TEST</a></li>
                </ul>
            </ul>
        </ul>
    </header>