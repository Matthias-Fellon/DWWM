<?php
    $nombre = rand(1,9);
    echo "Table de multiplication du nombre : ";

    for($i; $i<=10; $i++){
        echo "$i x $nombre = " . ($i*$nombre) . "\n";
    }
?>