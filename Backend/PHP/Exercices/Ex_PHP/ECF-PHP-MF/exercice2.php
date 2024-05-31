<?php
require "fonctions.php";

function calculatice(){
    system('clear');   
    echo("*************************************\n"
        . "*          Ma Calculatrice          *\n"
        . "*************************************\n\n");
    $quitter = "";
    while($quitter != "n" && $quitter != "non"){
        $nombre_1 = nombreValide("premier");
        $nombre_2 = nombreValide("deuxième");
    
        echo("\n-------------------------------------------\n"
            . "Menu:\n"
            . "1. Addition\n"
            . "2. Soustraction\n"
            . "3. Multiplication\n"
            . "4. Division\n");
    
        $choix = readline("Entrez le numéro de l'opération que vous voulez effectuer : ");
    
        switch($choix){
            case 1:
                calculNombres($nombre_1, $nombre_2, "+", "l'addition");
                break;
        
            case 2:
                echo("\n-------------------------------------------\n\n"
                    . "Le résultat de la soustraction est : "
                    . round(($nombre_1 - $nombre_2), 2, PHP_ROUND_HALF_UP)
                    . "\n\n");
                break;
            
            case 3:
                echo("\n-------------------------------------------\n\n"
                    . "Le résultat de la multiplication est : "
                    . round(($nombre_1 * $nombre_2), 2, PHP_ROUND_HALF_UP)
                    . "\n\n");
                break;
    
            case 4:
                echo("\n-------------------------------------------\n\n"
                    . "Le résultat de la division est : "
                    . round(($nombre_1 / $nombre_2), 2, PHP_ROUND_HALF_UP)
                    . "\n\n");
                break;
            
            default:
                echo("\n-------------------------------------------\n"
                    . "Choix invalide.\n\n");
                break;
        }
        $quitter = strtolower(readline("Voulez-vous effectuer une autre opération ? (o/n) : "));
        while($quitter != "o" && $quitter != "n" && $quitter != "oui" && $quitter != "non"){
            echo "Réponse invalide.";
            $quitter = strtolower(readline("Voulez-vous effectuer une autre opération ? (o/n) : "));
        }
    }
    echo "Au revoir !";
}
?>