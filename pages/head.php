<?php 

//Definissons des balises principales et liaisons aux fichiers style et main (script js).
//Ne pas l'appeler just $html permettra de définir une variable $html directement dans les pages...

if(!(isset($title))){
    $title = "Diagonale Chute Libre";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title><?php echo($title); ?></title>
    <link rel='stylesheet' href='../styles/style.css' />
    <script src='../scripts/main.js'></script>
</head>
<body>