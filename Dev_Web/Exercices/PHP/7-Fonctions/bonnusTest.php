<?php
function sommeTab(){
    $tabMere = [];
    $tabFinal = [];

    $tabMere[0] = [1, 2, 3, 4, 5, 6, 7, 8];
    $tabMere[1] = [1, 2, 3, 4, 5, 6, 7, 8];
    $tabMere[2] = [1, 2, 3, 4, 5, 6, 7, 8];

    // Initialiser $tabFinal avec des zéros
    for($i = 0; $i < count($tabMere[0]); $i++) {
        $tabFinal[$i] = 0;
    }

    for($i=0; $i<count($tabMere); $i++){
        for($j=0; $j<count($tabMere[$i]);$j++){
            $tabFinal[$i] += $tabMere[$i][$j];
        }
    }

    for($i = 0; $i < count($tabMere); $i++){
        afficherTab($tabMere[$i], ("Tableau " . ($i+1) . " : "));
    }

    afficherTab($tabFinal, "Tableau final : ");
}

function afficherTab($tab, $nomTab){
    echo "$nomTab : ";
    foreach($tab as $valeur){ 
        echo "$valeur ";
    }
    echo "\n";
}

sommeTab();
?>