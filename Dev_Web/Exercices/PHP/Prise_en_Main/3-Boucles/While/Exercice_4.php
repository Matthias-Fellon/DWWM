<?php
    $nombre1 = readline("Entrez un premier nombre : ");
    $nombre2 = readline("Entrez un deuxième nombre : ");
    
    while ($nombre2 != 0) {
        $temp = $nombre2;
        $nombre2 = $nombre1 % $nombre2;
        $nombre1 = $temp;
        echo "temp : $temp / nb_2 : $nombre2 / nb_1 : $nombre1\n";
    }

    /* Explication
    nombre1 = 4851
    nombre2 = 616

    Premier Boucle :
    temp = 616
    nombre2 = 4851 % 539 
    nombre1 = 77

    Deuxieme Boucle : 
    temp = 539
    nombre2 = 616 % 77
    nombre1 = 539

    Troisième Boucle :
    temp = 77
    nombre2 = 539 % 77 = 0
    nombre1 = 77
    */
    
    echo "Le PGCD de ces deux  nombre est : $nombre1\n";
?>