<?php
require_once "exercice_1.php";
require_once "exercice_2.php";
require_once "exercice_3.php";
require_once "exercice_4.php";

do{
    system('clear');   
    echo("\nQuel exercice choisissez-vous ?[1-5]\n"
        . "1. Calcul sur le cercle\n"
        . "2. Calculatrice\n"
        . "3. Tableau de notes\n"
        . "4. Jeu du chifoumi\n"
        . "5. Quitter\n\n");

    $choix = strtolower(readline("Votre choix : "));
    echo PHP_EOL;

    switch($choix){
        case 1:
            calculCercle();
            break;
    
        case 2:
            calculatrice();
            break;
        
        case 3:
            tableauNotes();
            break;

        case 4:
            chifoumi();
            break;

        case 5:
        case "quitter":
        case "q":
            echo "Au revoir !";
            break;
        
        default:
            echo "Erreur de synthaxe, veuillez réessayer !";
            break;
    }  
    readline("\n\nAppuyez sur \"entrée\" pour continuer...");             
}while($choix != "q" && $choix !="quitter" && $choix !=5);
?>