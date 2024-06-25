<?php
    $nombre = readline("Entrez un nombre entre 10 et 20 : ");
    while($nombre<10 || $nombre>20){
        switch(true){
            case ($nombre < 10):
                $nombre = readline("Nombre trop petit ! Entrez un autre nombre : ");
                break;

            case ($nombre > 20):
                $nombre = readline("Nombre trop grand ! Entrez un autre nombre : ");
                break;

            default:
                $nombre = readline("Erreur d'écriture ! Entrez un autre nombre : ");
                break;
        }
    }
    echo "Votre nombre est : $nombre";
?>