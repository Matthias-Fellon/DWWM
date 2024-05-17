<?php
    $tab = [10, 20, 30, 40, 50, 60, 70, 80, 90];
    $somme = 0;
    foreach($tab as $index => $valeur){
        $somme = $somme + $valeur;  
    }
    echo "Moyenne = " .($somme/count($tab));
?>