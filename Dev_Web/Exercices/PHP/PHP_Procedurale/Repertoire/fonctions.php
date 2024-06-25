<?php
function ajouterContact(){
    // Ajouter les renseignements dans le tableau associatif
    // TODO Vérifier le format du numéro
    // Proposition d'ajout d'un autre contact
    // Vérifier si le contact n'existe pas deja

    function addContact(){
        $json = file_get_contents("Contacts.json");
        $data = json_decode($json, true);
        
        if($data === null) {
            $data = array("contacts" => array());
        }

        $nom = readline("Entrez le nom du contact : ");
        $prenom = readline("Entrez le prénom du contact : ");
        $numero = readline("Entrez le numéro du contact : ");
        
        foreach($data["contacts"] as $contactExistant){
            if($contactExistant["nom"] === $nom && $contactExistant["prenom"] === $prenom){
                echo "Ce contact existe déjà.\n";
                return;
            }
            
            if($contactExistant["telephone"] === $numero) {
                echo "Le numéro de téléphone existe déjà.\n";
                return;
            }
        }
        $contact = array(
            "nom" => $nom,
            "prenom" => $prenom,
            "telephone" => $numero
        );

        $data["contacts"][] = $contact;
        file_put_contents('Contacts.json', json_encode($data, JSON_PRETTY_PRINT));
        echo "Le contact \"$nom $prenom\" à été ajouté";
        readline("\n\nAppuyez sur \"entrée\" pour continuer..."); 
    }

    $choix = '';
    addContact();
    while($choix != 'n'){
        system('clear'); 
        $choix = readline("Souhaitez-vous ajouter un autre contact ? [o/n] ");
        switch($choix){
            case "o":
                addContact();
                break;
                
            case "n":
                break;
                
            default:
            echo "Erreur de synthaxe, veuillez réessayer !";
            readline("\n\nAppuyez sur \"entrée\" pour continuer..."); 
            break;
        }
    }
}

function rechercherContact(){
    $recherche = readline("Entrez le nom ou le numéro de téléphone du contact à rechercher : ");

    // Lecture du fichier JSON
    $json = file_get_contents("Contact.json");

    // Décodage du fichier JSON
    $data = json_decode($json, true);

    // Vérification + recherche du contact
    if ($data !== null && isset($data["contacts"])) {
        foreach($data["contacts"] as $contact) {
            if($contact["nom"] === $recherche || $contact["telephone"] === $recherche) {
                echo "Contact trouvé :\n";
                echo "Nom: " . $contact["nom"] . "\n";
                echo "Prénom: " . $contact["prenom"] . "\n";
                echo "Téléphone: " . $contact["telephone"] . "\n";
                return;
            }
        }
        echo "Contact non trouvé.\n";
    }else{
        echo "Aucun contact trouvé.\n";
    }
}

function afficherAllContact(){
    $json = file_get_contents("Contacts.json");
    $data = json_decode($json, true);
    
    if($data !== null && isset($data["contacts"])) {
        foreach($data["contacts"] as $contact) {
            echo "Nom: " . $contact["nom"] . "\n";
            echo "Prénom: " . $contact["prenom"] . "\n";
            echo "Téléphone: " . $contact["telephone"] . "\n";
            echo "-------------------------\n";
        }
    }else{
        echo "Aucun contact trouvé.\n";
    }
}
?>