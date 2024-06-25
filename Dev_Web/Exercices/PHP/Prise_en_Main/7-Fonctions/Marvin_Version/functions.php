<?php
// 1 - Écrire une fonction qui permet de calculer le prix TTC en fonction du prix HT, le nombre d’articles et le taux de tva.
function calculTTC($prix, $nbArticles, $tva)
{
    $totalHT = $nbArticles * $prix;
    $totalTTC = $totalHT * (1 + ($tva / 100));

    return $totalTTC;
}


// 2 - Écrire une fonction qui calcul le PGCD
function pgcd($n1, $n2)
{
    // Euclide's way
    // Start by dividing highest number with lowest number
    // Then divide the lowest number of the previous division with the remainder
    // When the remainder is null, the highest number of the previous division is the GCD
    $reste = 0;

    do {
        $reste = $n1 % $n2;

        $n1 = $n2;
        $n2 = $reste;
    } while ($reste != 0);

    return $n1;
}


// 3 - Écrire une fonction qui calcul le PPCM
function ppcm($n1, $n2)
{
    $pgcd = pgcd($n1, $n2);
    return ($n1 * $n2) / $pgcd;
}


// 4 - Écrire une fonction qui calcul et affiche la table de multiplication d’un nombre entré par l’utilisateur
function tableMulti($n1)
{
    $tab = [];
    for ($i = 0; $i <= 10; $i++) {
        array_push($tab, $i * $n1);
    }
    return $tab;
}


// 5 - Écrire une fonction qui calcul la factorielle d’un nombre entré par l’utilisateur et l’affiche
function factorielle($n1)
{
    $total = 1;
    for ($i = 1; $i <= $n1; $i++) {
        $total *= $i;
    }

    return $total;
}


// 6 - Écrire une fonction qui calcul la somme des valeurs d’un tableau (déjà rempli) 
// /!\ Ca n'a pas trop de sens vu que l'on a déjà array_sum()
function sommeTableau($arr)
{
    return array_sum($arr);
}

// 7 - Écrire une fonction qui demande le nombre de ligne et affiche un triangle isocèle
function afficherTriangleIsocèle($size, $char = "*")
{
    // Génération du triangle
    for ($i = 1; $i <= $size; $i++) {
        $halfSize = ceil($size / 2);
        // Si nous sommes dans la première moitié du triangle, on utilise une boucle for croissante
        // Sinon on utilise une boucle for décroissante
        if ($i <= $halfSize) {
            for ($j = 0; $j < $i; $j++) {
                echo $char;
            }
        } else {
            for ($j = $size - $i + 1; $j > 0; $j--) {
                echo $char;
            }
        }
        // On passe à la ligne pour préparer l'affichage de la prochaine ligne
        echo PHP_EOL;
    }
}


// Helper functions
function getNumberBetweenBounds($lowerBound, $upperBound, $text)
{
    // Only get a number bellow the upperBound
    if ($lowerBound === null) {
        $numToCheck = readline($text);
        while ($numToCheck > $upperBound || !is_numeric($numToCheck)) {
            $numToCheck = readline($text);
        }
    }
    // Only get a number greater than the lowerBound
    else if ($upperBound === null) {
        $numToCheck = readline($text);
        while ($numToCheck < $lowerBound || !is_numeric($numToCheck)) {
            $numToCheck = readline($text);
        }
    }
    // Get a number between the lower and upper bound 
    else {
        $numToCheck = readline($text);
        while ($numToCheck < $lowerBound || $numToCheck > $upperBound ||!is_numeric($numToCheck)) {
            $numToCheck = readline($text);
        }
    }

    return $numToCheck;
}

function getNumericValue($text) {
    $userNum = readline($text);
    while (!is_numeric($userNum)) {
        $userNum = readline($text);
    }

    return $userNum;
}