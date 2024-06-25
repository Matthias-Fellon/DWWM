<?php
    $chiffre = readline("Entrez un chiffre entre 1 et 3 : ");
    while($chiffre<1 || $chiffre>3){
        $chiffre = readline("Erreur ! Veuillez entrer un chiffre entre 1 et 3 : ");
    }
    echo "Votre chiffre est : $nombre";
?>