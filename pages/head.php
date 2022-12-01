<<<<<<< HEAD
<?php 

//Definissons des balises principales et liaisons aux fichiers style et main (script js).
//Ne pas l'appeler just $html permettra de définir une variable $html directement dans les pages...
session_start();

if(!(isset($title))){
    $title = "";
}

$html_head = "<!DOCTYPE html>\n";
$html_head .= "<html>\n<head>\n";
$html_head .= "<meta charset='utf-8' />\n";
$html_head .= "<title>$title</title>\n";
$html_head .= "<link rel='stylesheet' href='../styles/style.css' />\n";

if(stripos($_SERVER["REQUEST_URI"],'index_admin.php')){
    $html_head .= "<link rel='stylesheet' href='../styles/admin.css' />\n";
}

if(stripos($_SERVER["REQUEST_URI"],'faq_tandem.php')){
    $html_head .= "<link rel='stylesheet' href='../styles/faq_style.css' />\n";
}

$html_head .= "<script src='../scripts/main.js'></script>\n";
$html_head .= "</head>\n";
$html_head .= "<body>\n";

echo($html_head);

?>
=======
<?php 

//Definissons des balises principales et liaisons aux fichiers style et main (script js).
//Ne pas l'appeler just $html permettra de définir une variable $html directement dans les pages...
session_start();

if(!(isset($title))){
    $title = "";
}

$html_head = "<!DOCTYPE html>\n";
$html_head .= "<html>\n<head>\n";
$html_head .= "<meta charset='utf-8' />\n";
$html_head .= "<title>$title</title>\n";
$html_head .= "<link rel='stylesheet' href='../styles/style.css' />\n";

if(stripos($_SERVER["REQUEST_URI"],'index_admin.php')){
    $html_head .= "<link rel='stylesheet' href='../styles/admin.css' />\n";
}

$html_head .= "<script src='../scripts/main.js'></script>\n";
$html_head .= "</head>\n";
$html_head .= "<body>\n";

echo($html_head);

?>
>>>>>>> 6b0ed94ed3a2a9fdace654348ce0c87bfab05150
