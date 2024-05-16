<?php
    $nombre = readline("Entrez un nombre : ");

    echo "Les 5 nombres précédent sont : \n";
    for($i=0; $i<=5; $i++){
        echo ($nombre - $i) . "\n";
    }

    echo "\n********************************\n\nLes 5 nombres suivant sont : \n";
    for($i=0; $i<=5; $i++){
        echo ($nombre + $i) . "\n";
    }
?>