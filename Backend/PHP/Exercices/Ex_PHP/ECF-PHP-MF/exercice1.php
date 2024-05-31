<?php
require "fonctions.php";

function calculCercle(){
    system('clear'); 
    echo("************************\n"
        . "* CALCUL SUR LE CERCLE *\n"
        . "************************\n\n");
    $quitter = "";
    while ($quitter != "n" && $quitter != "non") {
        echo "\n";
        $rayonCercle = readline("Entrez le rayon du cercle : ");
    
        echo("La circonférence du cercle est : "
            . perimetreCercle($rayonCercle)
            . "\n");
        echo("La surface du cercle est : "
            . aireCercle($rayonCercle)
            . "\n\n");
        
        $quitter = strtolower(readline("Voulez-vous faire un autre calcul ? (o/n) : "));
        while ($quitter != "o" && $quitter != "n" && $quitter != "oui" && $quitter != "non") {
            echo "Entrez une réponse valide.\n\n";
            $quitter = strtolower(readline("Voulez-vous faire un autre calcul ? (o/n) : "));
        }
    }
    echo "Au revoir à bientôt";
}
?>