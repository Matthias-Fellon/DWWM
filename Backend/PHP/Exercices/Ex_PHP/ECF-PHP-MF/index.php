<?php
require "exercice1.php";
require "exercice2.php";
require "exercice3.php";
require "exercice4.php";

system('clear');   
$choix='';
while($choix != "Q" && $choix != "q" && $choix !="Quitter" && $choix !="quitter" && $choix !=5){
    echo("\nQuel exercice choisissez-vous ?[1-5]\n"
        . "1. Calcul sur le cercle\n"
        . "2. La calculatrice\n"
        . "3. Le tableau de notes\n"
        . "4. Le jeu du chifoumi\n"
        . "5. Quitter\n\n");

    $choix = readline("Votre choix : ");
    echo PHP_EOL;

    switch($choix){
        case 1:
            calculCercle();
            break;
    
        case 2:
            calculatice();
            break;
        
        case 3:
            tableauNotes();
            break;

        case 4:
            chifoumi();
            break;

        case 5:
        case "Quitter":
        case "quitter":
        case "Q":
        case "q":
            echo "Au revoir !";
            break;
        
        default:
            echo "Erreur de synthaxe, veuillez réessayer !";
            break;
    }  
    readline("\n\nAppuyez sur \"entrée\" pour continuer...");
    system('clear');              
}
?>