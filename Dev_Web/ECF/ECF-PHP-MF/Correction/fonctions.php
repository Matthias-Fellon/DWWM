<?php

//exercice 1 : Calcul sur le cercle

//Vérification de la saisie
function verifierSaisie($valeur){
    if(!is_numeric($valeur) || $valeur <=0){
        echo "Nombre invalide, recommencez : \n";
        return false;
    }
    return true;
}

//Fonction calcul sur le cercle
function calculerCercle($rayon){

    //La circonférence
    $circonference = 2 * M_PI * $rayon;

    // La surface
    $surface = M_PI *pow($rayon, 2);

    return [
        'circonference' =>round($circonference,2),
        'surface' => round($surface,2)
    ];

}
echo "*********************************************\n";

//Fonction pour demander un nombre à l'utilisateur
function demanderNombre($message){
    $nbreValide = false;
    while(!$nbreValide){
        echo $message;
        $saisie =readline();
        $nbreValide = verifierSaisie($saisie);
    }
    return $saisie;
}

//Fonction pour afficher le menu et obtenir le chois de l'utilisateur

function afficherMenu(){
    echo "\n";
    echo "-----------------------------------------\n";
    echo "Menu :\n";
    echo "1. Addition\n";
    echo "2. soustraction\n";
    echo "3. Multiplication\n";
    echo "4. Division\n";
    $choix = readline("entrez le numéro de l'opération que vous voulez effectuer :\n");
    echo "-----------------------------------------\n";
    return $choix;

}

//fonction pour effectuer l'opération choisie par l'utilisateur

function operation($choix,$nombre1,$nombre2){

    switch($choix){
        case 1: 
            $resultat = $nombre1 + $nombre2;
            echo "Le résultat de l'adition est : $resultat\n";
            break;
        
        case 2: 
            $resultat = $nombre1 - $nombre2;
            echo "Le résultat de la soustraction est : $resultat\n";
            break;
        
        case 3:
            $resultat = $nombre1 * $nombre2;
            echo "Le résultat de la multiplication est : $resultat\n";
            break;
        
        case 4:

            //Vérification du deuxième nombre
            if($nombre2 != 0){
                $resultat = $nombre1 / $nombre2;
                echo "Le résultat de la division est : $resultat\n";
            }else{
                echo "erreur : division par zéro \n";
            }
            break;
        default:
        echo "Choix invalide\n";

    }

}

//Fonction pour demander à l'utilisateur s'il veut continuer ou quitter

function continuer(){
    $reponse = readline("Voulez-vous effectuer une autre opération ? (o/n) :");
    return strtolower($reponse) == "o";
}

echo "*********************************************\n";

//Exercice 3 : Tableau de notes

//Fonction qui permet à l'utilisateur de saisir des notes dans le tableau
function saisirNotes($tabNotes){

    do{
        $nbEleve = readline("Combien d'élèves dans la classe :");
        if(!is_numeric($nbEleve) || (int)$nbEleve <=0){
            echo "Veuillez entrer un nombre : \n";

        }
    }while(!is_numeric($nbEleve) || (int)$nbEleve <=0);


$nbEleve = (int)$nbEleve;

    for($i=0;$i<$nbEleve;$i++){
        $nom = readline("Nom de l'élève :");

        do{
            $note = readline("Note de $nom (entre 0 et 20) :");
            if(!is_numeric($note) || (float)$note < 0 || (float)$note > 20){
                echo "Veuillez entrer une note entre 0 et 20 \n";
            }
        }while(!is_numeric($note) || (float)$note < 0 || (float)$note > 20);
        $note = (float)$note;
        $tabNotes[$nom][] = $note;  
    }
    return $tabNotes;
}

//Fonction ajouter une note
function ajouterNote(&$tabNotes){
    $nom = readline("Nom de l'élève : ");
    do{
        $note = readline("Note de $nom (entre 0 et 20) :");
        if(!is_numeric($note) || (float)$note < 0 || (float)$note > 20){
            echo "Veuillez entrer une note entre 0 et 20 \n";
        }
    }while(!is_numeric($note) || (float)$note < 0 || (float)$note > 20);
    $note = (float)$note;
    $tabNotes[$nom][] = $note;
    echo "Note ajoutée avec succès \n";
}

//Fonction suppression note
function supprimerNote(&$tabNotes){
    $nom = readline("Nom de l'élève à supprimer :");

    if(isset($tabNotes[$nom])){
        unset($tabNotes[$nom]);
        echo "Notes supprimées avec succès\n";
    }else{
        echo "Elève non trouvé\n";
    }
}

//Fonction qui calcul la moyenne
function calculMoyenne($tabNotes){
    $somme = 0;
    $nbNotes = 0;
    foreach($tabNotes as $notes){
        $somme += array_sum($notes);
        $nbNotes += count($notes);
    }
    return $nbNotes ? $somme / $nbNotes : 0;
}

//Fonction qui permet de trouver nombre max et min*
function trouverMaxMin($tabNotes){
    $maxNote = -INF;
    $minNote = INF;

    $eleveMax = $eleveMin = '';
    foreach($tabNotes as $nom => $notes){
        $max = max($notes);
        $min = min($notes);

        if($max > $maxNote){
            $maxNote = $max;
            $eleveMax = $nom;
        }

        if($min < $minNote){
            $minNote = $min;
            $eleveMin = $nom;
        }
        
    }
    return [$eleveMax, $maxNote,$eleveMin,$minNote];
}

//Fonction qui permet afficher les élèves au-dessus de la moyenne générale :

function auDessusMoyenne($tabNotes, $moyenne){
    $eleve = [];
    foreach($tabNotes as $nom => $notes){
        foreach($notes as $note){
            if($note > $moyenne){
                $eleve[] = $nom;
            }
        }
    }
    return $eleve;
}

//Trier et afficher le tableau des notes :

function trierNotes($tabNotes){
    foreach($tabNotes as $nom => $notes){
        sort($tabNotes[$nom]);
    }
    return $tabNotes;
}

//Fonction pour afficher le tableau
function afficherTableau($tabNotes){
    echo "+----------------------+-------------------------------+\n";
    echo "| Nom                 | Notes                          |\n";
    echo "+----------------------+-------------------------------+\n";
    foreach($tabNotes as $nom => $notes){
        $noteStr = implode(',',$notes);
        printf("| %-20s | %-30s |\n",$nom, $noteStr);
    }
   
    echo "+----------------------+-------------------------------+\n";

}

//Le menu
function affichageMenu(){
    echo "Menu : \n";
    echo "1.Ajouter une note\n";
    echo "2.Supprimer un note\n";
    echo "3.Calculer la moyenne de la classe\n";
    echo "4.Trouver la note la plus élévée et la moins élévée\n";
    echo "5.Afficher les élèves au-dessus de la moyenne générale \n";
    echo "6.Trier et afficher le tableau des notes\n";
    echo "7.Afficher le tableau des notes\n";
    echo "8.Quitter\n";
}

echo "*****************************************\n";

//Exercice 4: Le jeu du Chifoumi
function afficherLeMenu(){
    echo "Chifoumi - Pierre, Papier, Ciseaux \n";
    echo "1.Jouer une manche\n";
    echo "2.Quitter\n";
}

function choixUtilisateur(){
    do{
        $choix = readline("Choisissez une option (1 pour Pierre, 2 pour Papier et 3 pour Ciseaux) :");
        if(!is_numeric($choix) || $choix < 1 || $choix > 3){
            echo "Choix invalide, recommencez \n";
        }
    }while(!is_numeric($choix) || $choix < 1 || $choix > 3);
    return (int)$choix;
}

function choixOrdinateur(){
    return rand(1,3);
}

function convertirChoix($choix){
    switch($choix){
        case 1 :
            return "Pierre";
            break;
        case 2 :
            return "Papier";
            break;
        case 3:
            return "Ciseaux";
            break;
    }
}

function gagnant($choixUtilisateur,$choixOrdinateur,$nomUtilisateur){
    if($choixUtilisateur == $choixOrdinateur){
        return "Egalité";
    }
    
    if(($choixUtilisateur == 1 && $choixOrdinateur == 3) ||
    ($choixUtilisateur == 2 && $choixOrdinateur == 1) ||
    ($choixUtilisateur == 3 && $choixOrdinateur == 2) ){
        return $nomUtilisateur;
    }
   return "Ordinateur";
}