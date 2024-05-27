<?php
// $tabNotes = array(['prenot'] => array (2,10,14), ['perthuis'] => array (10,18,12) …à compléter avec des élèves et des notes de votre choix
//  1. Afficher le nom et les notes de chaque élève.
//  2. Afficher le nom et la moyenne de chaque élève
//  3. Afficher les notes et la moyenne d'un élève dont le nom sera saisi au clavier (attention vous devez vérifier que cet élève est bien présent dans le tableau) 
//  4. Faire un menu pour afficher les questions 1,2,3

// 1. Afficher le nom et les notes de chaque élève.
function afficherNotes($tabNotes)
{
    echo "==============================\n";
    echo "   Notes de chaque élèves :   \n";
    echo "==============================\n";
    foreach ($tabNotes as $eleve => $notes) {
        echo "Notes de " . $eleve . " : \n";
        foreach ($notes as $note) {
            echo "\t- " . $note . "/20\n";
        }
    }
    echo PHP_EOL;
}

// 2. Afficher le nom et la moyenne de chaque élève
function afficherMoyenneEleves($tabNotes)
{
    echo "==============================\n";
    echo "  Moyenne de chaque élèves :  \n";
    echo "==============================\n";
    foreach ($tabNotes as $eleve => $notes) {
        $average = array_sum($notes) / count($notes);
        echo $eleve . " : " . number_format($average, 2, ",") . "\n";
    }
}

//  3. Afficher les notes et la moyenne d'un élève dont le nom sera saisi au clavier (attention vous devez vérifier que cet élève est bien présent dans le tableau)
function afficherNoteEleveChoisi($tabNotes)
{

    // Vérification que le nom saisi existe dans le tableau
    $nomEleve = "";
    while (!array_key_exists($nomEleve, $tabNotes)) {
        // Affichage de tous les élèves présent dans le tableau
        echo "Elèves présent : " . implode(", ", array_keys($tabNotes)) . "\n";

        $nomEleve = readline("Veuillez entrer le nom de l'élève dont vous voulez voir les notes : ");
    }

    echo "==============================\n";
    echo "          {$nomEleve} :       \n";
    echo "==============================\n";

    $notesEleve = $tabNotes[$nomEleve];
    echo "Notes : \n";
    foreach ($notesEleve as $note) {
        echo "\t{$note}/20 \n";
    }
    echo "Moyenne de {$nomEleve} : \n" . "\t" . number_format(array_sum($notesEleve) / count($notesEleve), 2, ",");
}



$tabNotes = array(
    "prenot" => [2, 10, 14],
    "perthuis" => [10, 18, 12],
    "paria" => [17, 16, 15],
    "pethro" => [0, 5, 9],
    "perditio" => [12, 11, 14],
);


$continue = "y";
//  4. Faire un menu pour afficher les questions 1,2,3
while ($continue == "y" || $continue == "Q") {

    $choice = 0;
    while ($choice < 1 || $choice > 3) {
        echo "Que voulez-vous faire : \n"
            . "\t1 - Afficher le nom et les notes de chaque élève\n"
            . "\t2 - Afficher le nom et la moyenne de chaque élève\n"
            . "\t3 - Afficher le nom et la moyenne d'un seul élève\n";

        $choice = readline("Votre choix : ");
        echo PHP_EOL;
    }

    switch ($choice) {
        case 1:
            afficherNotes($tabNotes);
            break;
        case 2:
            afficherMoyenneEleves($tabNotes);
            break;
        case 3:
            afficherNoteEleveChoisi($tabNotes);
            break;
        default:
            echo "ERROR: le choix n'est pas valide";
    }

    echo PHP_EOL;
    echo PHP_EOL;

    $continue = readline("Vous voulez faire une autre demande ? (y/N)");
}