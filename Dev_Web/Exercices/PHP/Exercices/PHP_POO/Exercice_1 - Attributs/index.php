<?php
require_once "plante.php";
$plante_1 = new Plante("Arbre","Chêne","20 mètres","100 ans","Fagacées");
$plante_2 = new Plante("Fleur","Rose","1 mètre","2 ans","Rosacées");
$plante_3 = new Plante("Fleur","Tournesol","3 mètres","1 an","Astéracées");

$plante_1->affichage();
$plante_2->affichage();
$plante_3->affichage();

$plante_1->setHauteur("50 mètres");
$plante_1->affichage();
?>