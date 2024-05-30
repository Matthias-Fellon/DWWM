<?php
require 'fonction.php';

$contacts = [];

do {
    echo "1. Ajouter un contact\n";
    echo "2. Rechercher un contact par nom\n";
    echo "3. Afficher tous les contacts\n";
    echo "4. Quitter\n";
    $choix = readline("Choisissez une option: "); 

    switch ($choix) {
        case 1:
            $nom = readline("Entrez le nom: "); 
            $telephone = readline("Entrez le numéro de téléphone: "); 
            ajouterContact($contacts, $nom, $telephone);
            echo "Contact ajouté avec succès.\n";
            break;

        case 2:
            $nom = readline("Entrez le nom à rechercher: "); 
            $contact = rechercherContact($contacts, $nom);
            if ($contact) {
                echo "Contact trouvé: Nom: " . $contact['nom'] . ", Téléphone: " . $contact['telephone'] . "\n";
            } else {
                echo "Contact non trouvé.\n";
            }
            break;

        case 3:
            afficherContacts($contacts);
            break;

        case 4:
            echo "Au revoir!\n";
            break;

        default:
            echo "Option invalide, veuillez réessayer.\n";
    }
} while ($choix != 4);
?>