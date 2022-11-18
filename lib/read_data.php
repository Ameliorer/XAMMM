<?php
//Récupération des données de la FAQ.
header("Content-type: application/json");

echo file_get_contents("../data/data_faq.json");

?>