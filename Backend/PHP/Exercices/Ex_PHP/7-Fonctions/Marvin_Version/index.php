<?php

require "functions.php";

// Tant que l'utilisateur renvoi 'y', il veut continuer le programme
$continue = 'y';
while ($continue === 'y') {

    // Affichage du menu
    $choice = -1;
    while ($choice < 1 || $choice > 7) {
        echo "Que voulez-vous faire ?\n"
            . "\t1 - Calcul TTC\n"
            . "\t2 - Calcul du PGCD\n"
            . "\t3 - Calcul du PPCM\n"
            . "\t4 - Afficher la table de multiplication d'un nombre\n"
            . "\t5 - Calcul de la factorielle\n"
            . "\t6 - Calcul de la somme d'un tableau\n"
            . "\t7 - Afficher un triangle isocèle\n";

        $choice = readline("Votre choix : ");
    }

    // On effectue l'action pour le choix spécifié par l'utilisateur
    switch ($choice) {
        // Calcul du prix TTC à partir du prix, de la quantité et de la TVA donné par un utilisateur
        case 1:
            $prix = readline("Entrez un prix HT : ");
            $quantite = readline("Entrez le nombre d'articles : ");
            $tva = readline("Entrez la TVA : ");
            echo "Prix TTC : " . calculTTC($prix, $quantite, $tva) . "\n";
            break;
        // Calcul du PGCD de deux nombres donnés par l'utilisateur
        case 2:
            $userNum1 = getNumericValue("Veuillez entrer un premier nombre : ");
            $userNum2 = getNumericValue("Veuillez entrer un deuxième nombre : ");
            echo "PGCD($userNum1, $userNum2) = " . pgcd($userNum1, $userNum2) . "\n";
            break;
        // Calcul du PPCM de deux nombres donnés par l'utilisateur
        case 3:
            $userNum1 = getNumericValue("Veuillez entrer un premier nombre : ");
            $userNum2 = getNumericValue("Veuillez entrer un deuxième nombre : ");
            echo "PPCM($userNum1, $userNum2) = " . ppcm($userNum1, $userNum2) . "\n";
            break;
        // Affichage de la table de multiplication d'un nombre donné par l'utilisateur
        case 4:
            $userNum = getNumericValue("Veuillez entrer un nombre : ");
            $tableMulti = tableMulti($userNum);
            echo "Table de multiplication de $userNum\n";
            for ($i = 1; $i < count($tableMulti); $i++) {
                echo "\t $i * $userNum = $tableMulti[$i]\n";
            }
            break;
        // Calcul de la factorielle d'un nombre donné par l'utilisateur
        case 5:
            $userNum = getNumberBetweenBounds(0, null, "Veuillez entrer un nombre positif : ");
            echo "$userNum! = " . factorielle($userNum) . "\n";
            break;
        // Somme des valeurs d'un tableau créé par un utilisateur
        case 6:
            $arrSize = getNumberBetweenBounds(1, null, "Entrez la taille du tableau : ");
            $arr = [];
            for ($i = 0; $i < $arrSize; $i++) {
                array_push($arr, getNumericValue("Valeur du nombre " . $i + 1 . " : "));
            }
            echo "Total : " . array_sum($arr) . "\n";
            break;
        // Affichage d'un triangle isocèle, d'une taille choisie par l'utilisateur
        case 7:
            $size = getNumberBetweenBounds(3, null, "Taille du triangle : (=>3)");
            $char = readline("Caractère pour dessiner le triangle : ");
            afficherTriangleIsocèle($size, $char);
            break;
        default:
            echo "ERROR: Choix invalide\n";
    }

    $continue = strtolower(readline("Voulez-vous retourner sur le menu ? (y/N) "));
}