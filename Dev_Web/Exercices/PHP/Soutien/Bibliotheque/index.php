<?php
require "fonction.php";



// Menu principal
while (true) {
    echo "1. Ajouter un livre\n";
    echo "2. Modifier un livre\n";
    echo "3. Supprimer un livre\n";
    echo "4. Afficher tous les livres\n";
    echo "5. Quitter\n";
    $choix = readline("Entrez votre choix : ");

    switch ($choix) {
        case 1:
            list($id, $titre, $auteur, $annee, $genre) = demanderInfosLivre();
            ajouterLivre($bibliotheque, $id, $titre, $auteur, $annee, $genre);
            break;
        case 2:
            $id = readline("Entrez l'ID du livre à modifier : ");
            list(, $titre, $auteur, $annee, $genre) = demanderInfosLivre();
            modifierLivre($bibliotheque, $id, $titre, $auteur, $annee, $genre);
            break;
        case 3:
            $id = readline("Entrez l'ID du livre à supprimer : ");
            supprimerLivre($bibliotheque, $id);
            break;
        case 4:
            afficherLivres($bibliotheque);
            break;
        case 5:
            exit("Au revoir!\n");
        default:
            echo "Choix invalide, veuillez réessayer.\n";
    }
}