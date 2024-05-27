<?php
    function afficherTab($tab, $nomTab){
        echo "$nomTab : ";
        foreach($tab as $index => $valeur){ 
            echo "$valeur ";
        }
        echo "\n";
    }

    function verifValeurPositive($valeur){
        while($valeur <= 0){
            $valeur = readline("Entrez une valeur positive : ");
        }
        return $valeur;
    }
    
    $nbProduits = readline("Nombre de produits : ");
    for($i=0; $i<$nbProduits; $i++){
        $prix = verifValeurPositive(readline("Entrez le prix du produit " . ($i+1) . " : "));
        $tabProduits[$i] = $prix;
        $quantite = verifValeurPositive(readline("Entrez la quantité du produit " . ($i+1) . " : "));
        $tabQuantites[$i] = $quantite;
    }

    afficherTab($tabProduits, "\nTableau prix");
    afficherTab($tabQuantites, "Tableau quantités");

    $totalPrix = 0;
    for($i=0; $i<$nbProduits; $i++){
        $totalPrix = $totalPrix + ($tabProduits[$i] * $tabQuantites[$i]);
    }
    echo "Prix total : $totalPrix";
?>