<?php 

//EXERCICE 1
$nombre = readline("Inscirvez un nombre : ");
echo "\nCe nombre au carré est égal à : " . ($nombre * $nombre);

//EXERCICE 2
$prenom = readline("\n\nQuel est votre prénom ? ");
echo "\nBonjour " . $prenom;

//EXERCICE 3
$prixHorsTaxe = readline("\n\nQuel est le prix hors taxe de l'article ? ");
$qteArticle = readline("\nQuelle est la quantité de cette article ? ");
$tauxTVA = readline("\nDe combien est la TVA sur cette article (en %) ? ");

$prixAvecTaxe = $prixHorsTaxe + ($prixHorsTaxe * $tauxTVA / 100);

echo "\nLe prix total TTC de cette/ces article(s) est de : " . ($prixAvecTaxe * $qteArticle) . " €" ;
?>