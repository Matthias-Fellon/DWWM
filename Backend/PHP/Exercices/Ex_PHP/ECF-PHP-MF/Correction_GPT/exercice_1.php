<?php

// Fonction pour calculer la circonférence d'un cercle
function calculerCirconference($rayon) {
    return 2 * M_PI * $rayon;
}

// Fonction pour calculer la surface d'un cercle
function calculerSurface($rayon) {
    return M_PI * pow($rayon, 2);
}

// Vérifier si le rayon est valide
function verifierRayon($rayon) {
    if (is_numeric($rayon) && $rayon > 0) {
        return true;
    } else {
        return false;
    }
}

// Saisie du rayon par l'utilisateur
$rayon = readline("Entrez le rayon du cercle : ");

// Vérification de la saisie
while (!verifierRayon($rayon)) {
    echo "Erreur : Veuillez entrer un nombre positif pour le rayon.\n";
    $rayon = readline("Entrez à nouveau le rayon du cercle : ");
}

// Conversion du rayon en nombre
$rayon = floatval($rayon);

// Calcul de la circonférence et de la surface
$circonference = calculerCirconference($rayon);
$surface = calculerSurface($rayon);

// Affichage des résultats
echo "La circonférence du cercle est : " . $circonference . "\n";
echo "La surface du cercle est : " . $surface . "\n";

?>