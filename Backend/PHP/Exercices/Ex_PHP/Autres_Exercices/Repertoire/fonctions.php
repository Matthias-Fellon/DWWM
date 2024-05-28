<?php
function ajouterContact(){
    /*
    Ajouter les renseignements dans le tableau associatif
    Vérifier le format du numéro
    Proposition d'ajout d'un autre contact
    */
    function addContact(){
        $nom = readline("Entrez le nom du contact : ");
        $prenom = readline("Entrez le prénom du contact : ");
        $numero = readline("Entrez le numéro du contact : ");
       
        $fich = fopen("Contact.csv", "w"); //Ouverture du fichier en écriture
        $sep = ","; //Séparateur

        if(file_get_contents("Contact.csv") == ''){
            fwrite($fich, $nom . $sep . $prenom . $sep . $numero . "\n");
        }else{
            fwrite($fich, $nom . $sep . $prenom . $sep . $numero);
        }
        fclose($fich);
    }

    $choix = '';
    addContact();
    $choix = readline("Souhaitez-vous ajouter un autre contact ? [o/n] ");
    while($choix != 'o' || $choix != 'n'){
        system('clear'); 
        switch($choix){
            case "o":
                addContact();
                break;
            
            case "n":
                break;

            default:
                echo "Erreur de synthaxe, veuillez réessayer !";
                break;
        }
        readline("\n\nAppuyez sur \"entrée\" pour continuer..."); 
    }
    
}

function rechercherContact(){

}

function afficherAllContact(){
    $fich = fopen("Contact.csv", "r"); //Ouverture du fichier en écriture
}
?>