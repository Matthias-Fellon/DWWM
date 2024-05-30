<?php
function ajouterContact(&$contacts, $nom, $telephone) {
    $contacts[] = ['nom' => $nom, 'telephone' => $telephone];
}

function rechercherContact($contacts, $nom) {
    foreach ($contacts as $contact) {
        if (strtolower($contact['nom']) === strtolower($nom)) {
            return $contact;
        }
    }
    return null;
}

function afficherContacts($contacts) {
    if (empty($contacts)) {
        echo "Le répertoire est vide.\n";
    } else {
        foreach ($contacts as $contact) {
            echo "Nom: " . $contact['nom'] . ", \nTéléphone: " . $contact['telephone'] . "\n";
        }
    }
}
?>