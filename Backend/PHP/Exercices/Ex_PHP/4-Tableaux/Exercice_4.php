<?php
    function afficherTab($tab, $nomTab){
        echo "$nomTab : ";
        foreach($tab as $index => $valeur){ 
            echo "$valeur ";
        }
        echo "\n";
    }
    
    $tab_1 = [4, 8, 7, 9, 1, 5, 4, 6];
    $tab_2 = [7, 6, 5, 2, 1, 3, 7, 4];

    afficherTab($tab_1, "Tableau 1");
    afficherTab($tab_2, "Tableau 2");


    for($i=0; $i<count($tab_1); $i++){
        $tab_3[$i] = $tab_1[$i] + $tab_2[$i];
    }

    afficherTab($tab_3, "Tableau 3");
?>