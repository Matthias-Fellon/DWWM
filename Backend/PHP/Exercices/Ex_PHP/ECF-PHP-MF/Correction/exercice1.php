<?php
require "fonctions.php";

echo "\n";
echo "           ********************              \n";
echo "           CALCUL SUR LE CERCLE             \n";
echo "           ********************          \n";
echo "\n";

do{
    do{
        $rayon = readline("Entrez le rayon du cercle : ");
    }while(!verifierSaisie($rayon));
    
    $result = calculerCercle($rayon);
    
    echo "Le circonference est : " .  $result['circonference'] . "\n";
    echo "Le surface est : " .  $result['surface'] . "\n";
    
    do{
        $reponse = strtolower(readline("Voulez-vous faire un autre calcul ? (o/n) : "));
        if($reponse !== 'o' && $reponse !== 'n'){
            echo "Réponse invalide (o/n) \n";
        }
    } while($reponse !== 'o' && $reponse !== 'n');

}while($reponse === 'o');

echo "Au revoir ";




