<?php
require "fonctions.php";

$choix='';
while($choix != "Q" && $choix != "q"){
    echo("\nQue choisissez-vous ?[1-7 ou Bonus ou Q/q]\n"
        . "1.Calcul prix TTC\n"
        . "2.Calcul PGCD\n"
        . "3.Calcul PPCM\n"
        . "4.Table de multiplication\n"
        . "5.Factorielle\n"
        . "6.Somme des valeurs d'un tableau\n"
        . "7.Triangle isocèle\n"
        . "Bonus.Somme de plusieurs tableaux\n\n");

    $choix = readline("Votre choix : ");
    echo PHP_EOL;

    switch($choix){
        case 1:
            prixTTC();
            break;
    
        case 2:
            PGCD();
            break;
        
        case 3:
            PPCM();
            break;

        case 4:
            tableMult();
            break;

        case 5:
            factorielle();
            break;

        case 6:
            $tab = [10, 20, 30, 40, 50, 60, 70, 80, 90];
            sommeValeursTab($tab);
            break;

        case 7:
            triangleIsocele();
            break;
        
        case "Bonus":
            sommeTab();
            break;

        case "Q":
        case "q":
            echo "Au revoir !";
            break;
        
        default:
            readline("Erreur de synthaxe, veuillez réessayer !");
            break;
    }  
    readline("\n\nAppuyez sur \"entrée\" pour continuer...");
    system('clear');              
}
?>