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
        echo("<link rel='stylesheet' href='/~XAMMM/styles/processus_saut.css' />\n");
    }
    if(stripos($_SERVER["REQUEST_URI"],'avis_clients.php')){
        echo("<link rel='stylesheet' href='/~XAMMM/styles/opinion.css' />\n");
    }


?>
    <script src='/~XAMMM/scripts/main.js' defer></script>
</head>
<body>
    <header id='header'>
        <ul id='headerMenusWrapper'>
            <span id='logo'></span>

            <ul class='headerMenu'>
                <span class='headerMenuTitle'>Réserver</span>
                <ul class='headerMenuList hidden'>
                 
                </ul>
            </ul>
            <ul class='headerMenu'>
                <span class='headerMenuTitle'>CGV</span>
                <ul class='headerMenuList hidden'>
              
                </ul>
            </ul>
            <ul class='headerMenu'>
                <span class='headerMenuTitle'>Utilisateur</span>
                <ul class='headerMenuList hidden'>
             
            </ul>
        </ul>
    </header>