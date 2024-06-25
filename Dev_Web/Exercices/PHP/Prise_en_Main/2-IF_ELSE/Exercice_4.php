<?php
    //EXERCICE 4
    $nbre1 = readline("Sélctionnez votre 1er nombre : ");
    $nbre2 = readline("Sélctionnez votre 2ème nombre : ");

    if ($nbre1 == 0 || $nbre2  == 0) {
        echo "Le produit est nul.";
    } else {
        
        if (($nbre1 < 0 && $nbre2  > 0) || ($nbre1 > 0 && $nbre2  < 0)) {
            echo "Le produit est négatif.";
        } else {
            echo "Le produit est positif.";
        }
    }
?>