<?php 

//EXERCICE 1
$nombre = readline("Inscirvez un nombre : ");
echo "Ce nombre au carré est égal à : " . ($nombre * $nombre) . "\n\n";

//EXERCICE 2
$prenom = readline("Quel est votre prénom ? ");
echo "Bonjour " . $prenom . "\n\n";

//EXERCICE 3
$prixHorsTaxe = readline("Entrez un prix HT : ");
$qteArticle = readline("Entrez le nombre d'articles : ");
$tauxTVA = readline("Entrez la TVA : ");

$prixAvecTaxe = $prixHorsTaxe + ($prixHorsTaxe * $tauxTVA / 100);

echo "Le prix total TTC de cette/ces article(s) est de : " . ($prixAvecTaxe * $qteArticle) . " €\n\n" ;
?>