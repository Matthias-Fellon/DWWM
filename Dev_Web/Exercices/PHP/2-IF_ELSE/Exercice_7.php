<?php
    //EXERCICE 7
    $heure = readline("Entrez les heures : ");
    $minute = readline("Entrez les minutes : ");
    $seconde = readline("Entrez les secondes : ");
    if($seconde == 59){
        $seconde = 00;
        if($minute == 59){
            $minute = 00;
            if($heure == 23){
                $heure = 00;
            }else{
                $heure++;
            }
        }else{
            $minute++;
        }
    }else{
        $seconde++;
    }
    echo "Dans une minute, il sera $heure heure(s), $minute minute(s) et $seconde seconde(s).";
?>