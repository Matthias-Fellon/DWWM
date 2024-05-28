<?php
require "fonctions.php";

if(!file_exists("Contact.csv")){
    //Création du fichier
    $f = fopen("Contact.csv", "x+");
}

$tabContact = []; //Tableau associatif
$choix='';

while($choix != "Q" && $choix != "q"){
    echo("\nQue choisissez-vous ?[1-4]\n"
        . "1.Ajouter un nouveau contact au répertoire\n"
        . "2.Rechercher un contact\n"
        . "3.Afficher tous les contacts du répertoire\n"
        . "4.Quitter\n\n");

    $choix = readline("Votre choix : ");
    echo PHP_EOL;

    switch($choix){
        case 1:
            ajouterContact($tabContact);
            break;
    
        case 2:
            rechercherContact($tabContact);
            break;
        
        case 3:
            afficherAllContact($tabContact);
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