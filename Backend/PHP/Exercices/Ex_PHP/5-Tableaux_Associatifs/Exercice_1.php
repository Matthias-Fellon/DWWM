<?php
    $chomage = array ("Autriche" => 4.9, "Allemagne" => 9.3, "Danemark" => 4.8, "Espagne" => 9.4, "France" => 9.7);

    foreach($chomage as $key => $value){
        echo "Pays : $key / Taux de chômage : $value%\n";
    }

    foreach($chomage as $key => $value){
        if($value < 5){
            echo "Pays : $key / Taux de chômage : $value%\n";
        }
    }

    $valeurMin = 10000000;
    foreach($chomage as $key => $value){
        if($value < $valeurMin){
            $valeurMin = $value;
            $nomPays = $key;
        }
    }
    echo "Pays ayant le taux de chômage le plus faible : $nomPays / Chomage : $valeurMin%\n";
?>