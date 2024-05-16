<?php //EXERCICE 3
    $prixHorsTaxe = readline("Entrez un prix HT : ");
    $qteArticle = readline("Entrez le nombre d'articles : ");
    $tauxTVA = readline("Entrez la TVA : ");

    $prixAvecTaxe = $prixHorsTaxe + ($prixHorsTaxe * $tauxTVA / 100);

    echo "Le prix total TTC de cette/ces article(s) est de : " . ($prixAvecTaxe * $qteArticle) . " €\n\n" ;
?>