<?php
require "fonctions.php";

if(!file_exists("Contacts.json")){
    $f = fopen("Contacts.json", "x+");
    fclose($f);
}

$choix='';

while($choix != "Q" && $choix != "q" && $choix !="Quitter" && $choix !="quitter" && $choix !=4){
    echo("\nQue choisissez-vous ?[1-4]\n"
        . "1.Ajouter un nouveau contact au répertoire\n"
        . "2.Rechercher un contact\n"
        . "3.Afficher tous les contacts du répertoire\n"
        . "4.Quitter\n\n");

    $choix = readline("Votre choix : ");
    echo PHP_EOL;

    switch($choix){
        case 1:
            ajouterContact();
            break;
    
        case 2:
            rechercherContact();
            break;
        
        case 3:
            afficherAllContact();
            break;

        case 4:
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