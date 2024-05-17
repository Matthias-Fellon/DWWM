<?php
    $tab_1 = [4, 8, 7, 9, 1, 5, 4, 6];
    $tab_2 = [7, 6, 5, 2, 1, 3, 7, 4];

    for($i=0; $i<count($tab_1); $i++){
        $tab_3[$i] = $tab_1[$i] + $tab_2[$i];
    }

    foreach($tab_3 as $index => $valeur){ 
        echo "Moyenne = " .($somme/count($tab)); // Modifier l'echo pour afficher le tableau 3
    }
?>