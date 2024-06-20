<?php
require_once "voiture.php";

$voiture_1 = new Voiture("Peugeot","308");
$voiture_1->setCouleur("Rouge");
$voiture_1->setAnnee("2003");
$voiture_1->accelerer(30);

$voiture_2 = new Voiture("Renault","Clio 3");
$voiture_2->setCouleur("Noire");
$voiture_2->setAnnee("2007");
$voiture_2->accelerer(130);

$voiture_3 = new Voiture("Tesla","Model S");
$voiture_3->setCouleur("Gris");
$voiture_3->setAnnee("2020");
$voiture_3->accelerer(50);

$voiture_1->afficher();
$voiture_2->afficher();
$voiture_3->afficher();
?>