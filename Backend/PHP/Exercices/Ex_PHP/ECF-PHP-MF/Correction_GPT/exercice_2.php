<?php
// TODO faire l'affichage et certaines vérif
function getNumber($prompt) {
    while(true) {
        echo $prompt;
        //fgets = lit une ligne à partir d'un fichier ou d'une entrée.
        //STDIN = constante qui représente l'entrée standard, c'est-à-dire la saisie de l'utilisateur à partir du terminal.
        //trim =  supprime les espaces blancs au début et à la fin d'une chaîne de caractères.
        $input = trim(fgets(STDIN));
        if(is_numeric($input)) {
            return (float)$input;
        } else {
            echo "Veuillez entrer un nombre valide.\n";
        }
    }
}

function getOperation() {
    while(true) {
        echo "Menu:\n";
        echo "1. Addition\n";
        echo "2. Soustraction\n";
        echo "3. Multiplication\n";
        echo "4. Division\n";
        echo "Entrez le numéro de l'opération que vous voulez effectuer : ";
        $input = trim(fgets(STDIN));
        if(in_array($input, ['1', '2', '3', '4'])) {
            return $input;
        } else {
            echo "Choix invalide.\n";
        }
    }
}

function calculate($num1, $num2, $operation) {
    switch($operation) {
        case '1':
            return $num1 + $num2;
        case '2':
            return $num1 - $num2;
        case '3':
            return $num1 * $num2;
        case '4':
            if($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Erreur : Division par zéro.";
            }
    }
}
function calculatrice(){
    do {
        $num1 = getNumber("Entrez le premier nombre : ");
        $num2 = getNumber("Entrez le deuxième nombre : ");
        $operation = getOperation();

        $result = calculate($num1, $num2, $operation);

        echo "Le résultat de l'opération est : " . $result . "\n";

        echo "Voulez-vous effectuer une autre opération ? (o/n) : ";
        $again = trim(fgets(STDIN));
    } while(strtolower($again) == 'o');

    echo "Au revoir !\n";
}
?>
