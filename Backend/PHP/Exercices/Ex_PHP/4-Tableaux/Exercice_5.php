<?php
    $tab = [];
    $nbValeurs = readline("Nombre de valeurs : ");

    //Saisir les valeurs du tableau
    for($i=0; $i<$nbValeurs; $i++){
        $valeur = readline("Entrez une valeur : ");
        $tab[$i] = $valeur;
    }

    $valeurMax = $tab[0];
    $posValeurMax = -1;
    $i=0;
    
    //Chercher la plus grande valeur du tableau
    foreach($tab as $valeur){
        if($valeur > $valeurMax){
            $valeurMax = $valeur; 
            $posValeurMax = $tab[$i];
            $i++;
        }
    }

    //Afficher le tableau
    echo "Tableau : ";
    foreach($tab as $index => $valeur){ 
        echo "$valeur ";
    }

    echo "\nPlus grande valeur : $valeurMax / position : " . ($posValeurMax+1) . "\n";
?>