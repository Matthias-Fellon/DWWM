<?php
//Exercice 1
function calculCercle(){
    // ! PBBBBB
    echo "************************\n* CALCUL SUR LE CERCLE *\n************************\n\n";
    $quitter = "";
    while($quitter != "n")
    $rayonCercle = readline("Entrez le rayon du cercle : ");
    echo("La circonférence du cercle est : " . round((2*pi()*$rayonCercle), 2, PHP_ROUND_HALF_UP) . "\n");
    echo("La surface du cercle est : " . round((pi()*pow($rayonCercle, 2)), 2, PHP_ROUND_HALF_UP) . "\n");
    
    $quitter = strtolower(readline("Voulez-vous faire un autre calcul ? (o/n) : "));
    while($quitter != "o" && $quitter != "n"){
        echo "Réponse invalide.";
        $quitter = strtolower(readline("Voulez-vous faire un autre calcul ? (o/n) : "));
    }

}
//Exercice 2
function calculatice(){
    function nombreValide($indexNombre){
        $nombre = readline("Entrez le $indexNombre nombre : \n");
        while(!is_numeric($nombre)){
            echo "Veuillez entrer un nombre valide.\n";
            $nombre = readline("Entrez le $indexNombre nombre : \n");
        }
        return $nombre;
    }

    echo "*************************************\n*          Ma Calculatrice          *\n*************************************\n\n";
    $quitter = "";
    while($quitter != "n"){
        $nombre_1 = nombreValide("premier");
        $nombre_2 = nombreValide("deuxième");
    
        echo("\n-------------------------------------------\nMenu:\n"
            . "1. Addition\n"
            . "2. Soustraction\n"
            . "3. Multiplication\n"
            . "4. Division\n");
    
        $choix = readline("Entrez le numéro de l'opération que vous voulez effectuer : ");
    
        switch($choix){
            case 1:
                echo "\n-------------------------------------------\n\nLe résultat de l'addition est : " . round(($nombre_1 + $nombre_2), 2, PHP_ROUND_HALF_UP) ."\n\n";
                break;
        
            case 2:
                echo "\n-------------------------------------------\n\nLe résultat de la soustraction est : " .  round(($nombre_1 - $nombre_2), 2, PHP_ROUND_HALF_UP) ."\n\n";
                break;
            
            case 3:
                echo "\n-------------------------------------------\n\nLe résultat de la multiplication est : " .  round(($nombre_1 * $nombre_2), 2, PHP_ROUND_HALF_UP) ."\n\n";
                break;
    
            case 4:
                echo "\n-------------------------------------------\n\nLe résultat de la division est : " .  round(($nombre_1 / $nombre_2), 2, PHP_ROUND_HALF_UP) ."\n\n";
                break;
            
            default:
                echo "\n-------------------------------------------\nChoix invalide.\n\n";
                break;
        }
        $quitter = strtolower(readline("Voulez-vous effectuer une autre opération ? (o/n) : "));
        while($quitter != "o" && $quitter != "n"){
            echo "Réponse invalide.";
            $quitter = strtolower(readline("Voulez-vous effectuer une autre opération ? (o/n) : "));
        }
    }
    echo "Au revoir !";
}

//Exercice 3

//Exercice 4
?>