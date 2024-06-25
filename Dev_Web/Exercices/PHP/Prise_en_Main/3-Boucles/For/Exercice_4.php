<?php
    $highNombre= readline("Entrez un nombre : ");
    $lowNombre = $highNombre;

    for($i=0; $i<4 ; $i++){
        $nombre = readline("Entrez un nombre : ");
        if($nombre > $highNombre){
            $highNombre = $nombre;
        }elseif($nombre < $lowNombre){
            $lowNombre = $nombre;
        }
    }

    echo "Nombre le plus grand : $highNombre\n";
    echo "Nombre le plus petit : $lowNombre";
?>