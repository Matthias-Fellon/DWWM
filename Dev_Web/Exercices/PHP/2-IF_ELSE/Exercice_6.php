<?php
    //EXERCICE 6
    $heure = readline("Entrez une heure : ");
    $minute = readline("Entrez les minutes : ");
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
    echo "Dans une minute, il sera $heure heure(s) $minute.";
?>