<?php
    //EXERCICE 8
    $nbPhotocopies = readline("Entrez le nombre de photocopies : ");
    $prix;
    switch(true){
        case ($nbPhotocopies <= 10):
            $prix = $nbPhotocopies * 0.10;
            break;
        
        case ($nbPhotocopies <= 30):
            $prix = 10 * 0.10 + ($nbPhotocopies - 10) * 0.09 ;
            break;

        case ($nbPhotocopies > 30):
            $prix = 10 * 0.10 + 20 * 0.09 + ($nbPhotocopies - 30) * 0.08;
            break;

        default:
            echo "Valeur incorrecte";
            break;   
    }
    echo "La facture des photocopies est de $prix €.";
?>