<?php
    //EXERCICE 2
    $nombre1 = readline("Entrez un premier nombre : ");
    $nombre2 = readline("Entrez un deuxième nombre : ");

    if(($nombre1<0 && $nombre2<0) || ($nombre1>0 && $nombre2>0)){
        echo "Le produit de ces deux nombre est positif";
    }elseif(($nombre1<0 && $nombre2>0) || ($nombre1>0 && $nombre2<0)){
        echo "Le produit de ces deux nombre est négatif";
    }
?>