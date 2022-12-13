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
<?php 

    
if(stripos($_SERVER["REQUEST_URI"],'index_admin.php')){
    echo("<link rel='stylesheet' href='/~XAMMM/styles/admin.css' />\n");
}
if(stripos($_SERVER["REQUEST_URI"],'index_user.php')){
    echo("<link rel='stylesheet' href='/~XAMMM/styles/user.css' />\n");
}
if(stripos($_SERVER["REQUEST_URI"],'faq_tandem.php')){
    echo("<link rel='stylesheet' href= '/~XAMMM/styles/faq_style.css' />\n");
}
if(stripos($_SERVER["REQUEST_URI"],'processus_de_saut.php')){
    echo("<link rel='stylesheet' href='/~XAMMM/styles/style_division.css' />\n");
}

if(stripos($_SERVER["REQUEST_URI"],'parachutisme_histoire.php')){
    echo("<link rel='stylesheet' href='/~XAMMM/styles/style_division.css' />\n");
}

if(stripos($_SERVER["REQUEST_URI"],'avis_clients.php')){
    echo("<link rel='stylesheet' href='/~XAMMM/styles/opinion.css' />\n");
}
if(stripos($_SERVER["REQUEST_URI"],'actualites.php')){
    echo("<link rel='stylesheet' href='/~XAMMM/styles/actualites.css' />\n");
}
if(stripos($_SERVER["REQUEST_URI"],'index.php')){
    echo("<link rel='stylesheet' href='/~XAMMM/styles/index.css' />\n");
}

if(stripos($_SERVER["REQUEST_URI"],'CGV.php')){
    echo("<link rel='stylesheet' href='/~XAMMM/styles/officiel.css' />\n");
}

if(stripos($_SERVER["REQUEST_URI"],'legal_notice.php')){
    echo("<link rel='stylesheet' href='/~XAMMM/styles/officiel.css' />\n");
}

if(stripos($_SERVER["REQUEST_URI"],'prestations.php')){
    echo("<link rel='stylesheet' href='/~XAMMM/styles/style_produit.css' />\n");
}

if(stripos($_SERVER["REQUEST_URI"],'form_adhesion.php')){
    echo("<link rel='stylesheet' href='/~XAMMM/styles/pages_co.css' />\n");
}

if(stripos($_SERVER["REQUEST_URI"],'form_connection.php')){
    echo("<link rel='stylesheet' href='/~XAMMM/styles/pages_co.css' />\n");
}

?>
    <script src='/~XAMMM/scripts/main.js' defer></script>
</head>
<body>
    <header id='header'>













    
        <ul id='headerMenusWrapper'>
            <span id='logoWrapper'><a href='/~XAMMM/index.php'><img id='logo' src='/~XAMMM/images/logo.png'></a></span>


            <ul class='headerMenu textTitleMenu'>
                <span class='headerMenuTitle'>Nos activitées</span>
                   
                <ul class='headerMenuList hidden'>
                    <li><a href='/~XAMMM/pages/processus_de_saut.php'>Le tandem </a></li>
                    <li><a href='/~XAMMM/pages/stagePAC.php'>Stage PAC</a></li>
                </ul>
            </ul>

            <ul class='headerMenu textTitleMenu'>
                <span class='headerMenuTitle'>Réserver</span>
                <ul class='headerMenuList hidden'>
                    <li><a href='/~XAMMM/pages/prestations.php'>Nos offres</a></li>
                    <li><a href='/~XAMMM/pages/confirmation_commande.php'>Confirmation de commande</a></li>
                </ul>
            </ul>

            <ul class='headerMenu textTitleMenu'>
                <span class='headerMenuTitle'>En savoir plus</span>
                <ul class='headerMenuList hidden'>
                    <li><a href='/~XAMMM/pages/parachutisme_histoire.php'>L'histoire du parachutisme</a></li>
                    <li><a href='/~XAMMM/pages/actualites.php'>Actualites</a></li>
                    <li><a href='/~XAMMM/pages/avis_clients.php'>Avis des clients</a></li>
                    <li><a href='/~XAMMM/pages/faq_tandem.php'>FAQ </a></li>
                </ul>
            </ul>


            <ul class='headerMenu textTitleMenu'>
                <span class='headerMenuTitle'>Infos légales</span>
                <ul class='headerMenuList hidden'>
                    <li><a href='/~XAMMM/pages/legal_notice.php'>Mentions Légales</a></li>
                    <li><a href='/~XAMMM/pages/CGV.php'>Conditions Générales de Vente</a></li>
                </ul>
            </ul>


        </ul>
    </header>