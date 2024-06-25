<?php
    //EXERCICE 3
    $nombre = readline("Entrez un nombre : ");
    if($nombre > 0){
        echo "Le nombre entré est positif";
    }elseif($nombre < 0){
        echo "Le nombre entré est négatif";
    }else{
        echo "Le nombre entré est à la fois positif et à la fois négatif";
    }
?>