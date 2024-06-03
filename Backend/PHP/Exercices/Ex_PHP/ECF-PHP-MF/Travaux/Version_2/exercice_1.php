<?php
require_once "fonctions.php";

//Exercice 1
function calculCercle() {
    system('clear'); 
    echo("************************\n"
        . "* CALCUL SUR LE CERCLE *\n"
        . "************************\n\n");

   do{
        do{
            $rayonCercle = readline("Entrez le rayon du cercle : ");
        }while(!verifierSaisie($rayonCercle));

        $result = calculerCercle($rayonCercle);

        echo("La circonférence du cercle est : "
            . $result['perimetre']
            . "\n");
        echo("La surface du cercle est : "
            . $result['aire']
            . "\n\n");

        do{
            $quitter = strtolower(readline("Voulez-vous faire un autre calcul ? (o/n) : "));
            if($quitter != "o" && $quitter != "n" && $quitter != "oui" && $quitter != "non"){
                echo "Entrez une réponse valide.\n\n";
            }
        } while($quitter != "o" && $quitter != "n" && $quitter != "oui" && $quitter != "non");
    } while($quitter != "n" && $quitter != "non");
    echo "Au revoir à bientôt";
}
?>