<?php 

//Head uniquement pour l'acceuil
//Definissons des balises principales et liaisons aux fichiers style et main (script js).
//Ne pas l'appeler just $html permettra de définir une variable $html directement dans les pages...
$html_head = "<!DOCTYPE html>\n";
$html_head .= "<html>\n<head>\n";
$html_head .= "<meta charset='utf-8' />\n";
$html_head .= "<title>Titre a definir</title>\n";
$html_head .= "<link rel='stylesheet' href='styles/style.css' />\n";
$html_head .= "<script src='scripts/main.js'></script>\n";
$html_head .= "</head>\n";
$html_head .= "<body>\n";

echo($html_head);

?>