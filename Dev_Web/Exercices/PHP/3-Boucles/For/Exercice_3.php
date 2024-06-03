<?php
    $nombre = readline("Entrez un nombre : ");
    $result = 1;
    echo "La factorielle de $nombre vaut : ";
    for($i=1; $i<=$nombre; $i++){
        $result = $result * $i;
    }
    echo ($result);
?>