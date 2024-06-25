<?php
    $tab = [10, 20, 30, 40, 50, 60, 70, 80, 90];
    
    //Afficher le tableau
    echo "Tableau : ";
    foreach($tab as $index => $valeur){ 
        echo "$valeur ";
    }

    echo "\nSomme du tableau = " . array_sum($tab);
?>