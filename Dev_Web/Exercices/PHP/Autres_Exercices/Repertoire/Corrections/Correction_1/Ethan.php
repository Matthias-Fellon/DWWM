<?php
// Tableau vide pour pouvoir y mettre des contacts plus tard
$repertoire = [];

// Fonction pour ajouter des contacts
function PushTabl($nom, $numero) {
    global $repertoire;
    array_push($repertoire, [$nom, $numero]);
    echo "**********************************************\n";
    echo "Contact ajouté : $nom, $numero\n \n";
    echo "**********************************************\n";
}

// Fonction pour rechercher un contact
function recherche($nom) {
    global $repertoire;
    foreach ($repertoire as $contact) {
        if ($contact[0] === $nom) {
            return $contact[1];
        }
    }
    return "Contact non trouvé \n";
}

// Fonction pour voir tout les contacts
function toutVoir() {
    global $repertoire;
    if (count($repertoire) === 0) {
        echo "**********************************\n";
        echo "Le répertoire est vide.\n";
        echo "**********************************\n";
    } else {
        foreach ($repertoire as $contact) {
            
            echo "\n".$contact[0] . " " . $contact[1]."\n";
            
        }
    }
}


// Boucle do While pour rentrer au moin 1 fois dans la boucle
do {
$choix1 = 1;
$choix2 = 2;
$choix3 = 3;

echo "Vous souhaitez :\n\n $choix1 : Ajouter un nouveau contact\n $choix2 : Recherchez un contact\n $choix3 : Rechercher Tout contact\n\n";

$choix = readline("Que voulez-vous faire ? ");

// Switch pour traiter le choix que l'utilisateur veux faire
    switch ($choix) {
        case $choix1:
            // Rappel de fonction pour ajouter des contacts
        $nom = readline("Entrez le prénom de la personne : ");
        $numero = readline("Entrez le numéro de téléphone : ");
        PushTabl($nom, $numero);
            break;
    
        case $choix2:
            // Rappel de fonction pour rechercher un contact
        $nomRecherche = readline("Entrez le prénom de la personne à rechercher : ");
        $resultatRecherche = recherche($nomRecherche);
        echo "**********************************************************************\n";
        echo $nomRecherche." a ce numéro : ". $resultatRecherche. "\n";
        echo "**********************************************************************\n";
            break;
    
        case $choix3:
            // Rappel de fonction pour voir tout les contacts
        toutVoir();
            break;
    
        default:
        // Si il fait un choix hors de ceux proposé
            echo "Merci de saisir un choix valide !";
            break;
    }
    // Demande pour continuer ou sortir de la boucle
    $choix = readline("Voulez-vous faire autre chose dans votre menu ? ");
    // Strtolower pour que même si il met en majuscule ca met en minuscule et valide la condition
    $choix = strtolower($choix);
} while ($choix == "oui" || $choix == "yes" || $choix == "y");

// Fin de programme et de la boucle
echo "Merci au revoir";
?>