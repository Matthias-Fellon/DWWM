<?php 
    $tab = [];
    $nbValeurs = readline("Nombre de valeurs : ");
    for($i=0; $i<$nbValeurs; $i++){
        $valeur = readline("Entrez une valeur : ");
        $tab[$i] = $valeur;
    }

    $positif = 0;
    $negatif = 0;

    foreach($tab as $valeur){
        if($valeur < 0){
            $negatif++; 
        }elseif($valeur > 0){
            $positif++;
        }
    }
    echo "Nombre négatifs : $negatif\n";
    echo "Nombre positifs : $positif";
?>