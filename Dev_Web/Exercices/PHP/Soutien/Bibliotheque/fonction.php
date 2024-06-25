<?php
// Initialisation de la bibliothèque
$bibliotheque = [];

// Fonction pour demander les informations d'un livre à l'utilisateur
function demanderInfosLivre() {
    $id = readline("Entrez l'ID du livre : ");
    $titre = readline("Entrez le titre du livre : ");
    $auteur = readline("Entrez l'auteur du livre : ");
    $annee = readline("Entrez l'année de publication du livre : ");
    $genre = readline("Entrez le genre du livre : ");
    return [$id, $titre, $auteur, $annee, $genre];
}

// Fonction pour ajouter un livre
function ajouterLivre(&$bibliotheque, $id, $titre, $auteur, $annee, $genre) {
    $bibliotheque[$id] = [
        'titre' => $titre,
        'auteur' => $auteur,
        'annee' => $annee,
        'genre' => $genre
    ];
}

// Fonction pour modifier un livre
function modifierLivre(&$bibliotheque,$id,$titre,$auteur,$annee,$genre){
    if(isset($bibliotheque[$id])){
        $bibliotheque[$id] = [
            'titre' =>$titre,
            'auteur' => $auteur,
            'annee' => $annee,
            'genre' => $genre
        ];
    }else{
        echo "Livre avec ID $id non trouvé";
    }
}


// Fonction pour supprimer un livre
function supprimerLivre(&$bibliotheque, $id){
    if(isset($bibliotheque[$id])){
        unset($bibliotheque[$id]);
    }else{
        echo "Livre avec ID $id non trouvé";
    }
}


// Fonction pour afficher les livres
function afficherLivres($bibliotheque) {
    foreach ($bibliotheque as $id => $details) {
        echo "ID : " . $id . "\n";
        echo "Titre : " . $details['titre'] . "\n";
        echo "Auteur : " . $details['auteur'] . "\n";
        echo "Année de publication : " . $details['annee'] . "\n";
        echo "Genre : " . $details['genre'] . "\n";
        echo "--------------------------\n";
    }
}