<?php
    $nombre = readline("Entrez un nombre : ");
    $nbFin = $nombre+9;
    while($nombre != $nbFin){
        $nombre++;
        echo "Nombre suivant : $nombre\n";
    }
?>