<?php
// Fonction pour afficher le menu et récupérer le choix de l'utilisateur
function afficherMenu() {
    echo "Menu:\n";
    echo "1. Jouer une manche\n";
    echo "2. Quitter\n";
    $choix = readline("Votre choix: ");
    return $choix;
}

// Fonction pour obtenir le coup de l'utilisateur
function obtenirCoupUtilisateur() {
    $coup = "";
    while (!in_array($coup, ["Pierre", "Feuille", "Ciseaux"])) {
        $coup = readline("Entrez votre coup (Pierre, Feuille ou Ciseaux): ");
        $coup = ucfirst(strtolower($coup));
    }
    return $coup;
}

// Fonction pour générer le coup de l'ordinateur
function genererCoupOrdinateur() {
    $coupsPossibles = ["Pierre", "Feuille", "Ciseaux"];
    $index = array_rand($coupsPossibles);
    return $coupsPossibles[$index];
}

// Fonction pour déterminer le résultat de la manche
function determinerResultat($coupUtilisateur, $coupOrdinateur) {
    if ($coupUtilisateur == $coupOrdinateur) {
        return "Égalité";
    } elseif (($coupUtilisateur == "Pierre" && $coupOrdinateur == "Ciseaux") ||
              ($coupUtilisateur == "Feuille" && $coupOrdinateur == "Pierre") ||
              ($coupUtilisateur == "Ciseaux" && $coupOrdinateur == "Feuille")) {
        return "Vous avez gagné!";
    } else {
        return "L'ordinateur a gagné!";
    }
}

// Initialisation des scores
$scoreUtilisateur = 0;
$scoreOrdinateur = 0;

echo "Bienvenue au jeu du Chifoumi!\n";
$nomUtilisateur = readline("Entrez votre nom: ");

// Boucle principale du jeu
while (true) {
    $choix = afficherMenu();

    if ($choix == 1) {
        $coupUtilisateur = obtenirCoupUtilisateur();
        $coupOrdinateur = genererCoupOrdinateur();
        echo "L'ordinateur a choisi: $coupOrdinateur\n";
        $resultat = determinerResultat($coupUtilisateur, $coupOrdinateur);
        echo "$resultat\n";
        if ($resultat == "Vous avez gagné!") {
            $scoreUtilisateur++;
        } elseif ($resultat == "L'ordinateur a gagné!") {
            $scoreOrdinateur++;
        }
    } elseif ($choix == 2) {
        echo "Partie terminée.\n";
        echo "Score final:\n";
        echo "$nomUtilisateur: $scoreUtilisateur\n";
        echo "Ordinateur: $scoreOrdinateur\n";
        break;
    } else {
        echo "Choix invalide. Veuillez entrer 1 ou 2.\n";
    }
}
?>