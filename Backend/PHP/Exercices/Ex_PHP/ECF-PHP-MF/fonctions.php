<?php
//Exercice 1
function calculCercle() {
    system('clear'); 
    echo("************************\n"
        . "* CALCUL SUR LE CERCLE *\n"
        . "************************\n\n");
    $quitter = "";
    while ($quitter != "n" && $quitter != "non") {
        echo "\n";
        $rayonCercle = readline("Entrez le rayon du cercle : ");

        echo("La circonférence du cercle est : "
            . round((2 * pi() * $rayonCercle), 2, PHP_ROUND_HALF_UP)
            . "\n");
        echo("La surface du cercle est : "
            . round((pi() * pow($rayonCercle, 2)), 2, PHP_ROUND_HALF_UP)
            . "\n\n");
        
        $quitter = strtolower(readline("Voulez-vous faire un autre calcul ? (o/n) : "));
        while ($quitter != "o" && $quitter != "n" && $quitter != "oui" && $quitter != "non") {
            echo "Entrez une réponse valide.\n\n";
            $quitter = strtolower(readline("Voulez-vous faire un autre calcul ? (o/n) : "));
        }
    }
    echo "Au revoir à bientôt";
}


//Exercice 2
function calculatice(){
    system('clear');   
    echo("*************************************\n"
        . "*          Ma Calculatrice          *\n"
        . "*************************************\n\n");
    $quitter = "";
    while($quitter != "n" && $quitter != "non"){
        $nombre_1 = nombreValide("premier");
        $nombre_2 = nombreValide("deuxième");
    
        echo("\n-------------------------------------------\n"
            . "Menu:\n"
            . "1. Addition\n"
            . "2. Soustraction\n"
            . "3. Multiplication\n"
            . "4. Division\n");
    
        $choix = readline("Entrez le numéro de l'opération que vous voulez effectuer : ");
    
        switch($choix){
            case 1:
                echo("\n-------------------------------------------\n\n"
                    . "Le résultat de l'addition est : "
                    . round(($nombre_1 + $nombre_2), 2, PHP_ROUND_HALF_UP)
                    . "\n\n");
                break;
        
            case 2:
                echo("\n-------------------------------------------\n\n"
                    . "Le résultat de la soustraction est : "
                    . round(($nombre_1 - $nombre_2), 2, PHP_ROUND_HALF_UP)
                    . "\n\n");
                break;
            
            case 3:
                echo("\n-------------------------------------------\n\n"
                    . "Le résultat de la multiplication est : "
                    . round(($nombre_1 * $nombre_2), 2, PHP_ROUND_HALF_UP)
                    . "\n\n");
                break;
    
            case 4:
                echo("\n-------------------------------------------\n\n"
                    . "Le résultat de la division est : "
                    . round(($nombre_1 / $nombre_2), 2, PHP_ROUND_HALF_UP)
                    . "\n\n");
                break;
            
            default:
                echo("\n-------------------------------------------\n"
                    . "Choix invalide.\n\n");
                break;
        }
        $quitter = strtolower(readline("Voulez-vous effectuer une autre opération ? (o/n) : "));
        while($quitter != "o" && $quitter != "n" && $quitter != "oui" && $quitter != "non"){
            echo "Réponse invalide.";
            $quitter = strtolower(readline("Voulez-vous effectuer une autre opération ? (o/n) : "));
        }
    }
    echo "Au revoir !";
}

function nombreValide($indexNombre){
    $nombre = readline("Entrez le $indexNombre nombre : \n");
    while(!is_numeric($nombre)){
        echo "Veuillez entrer un nombre valide.\n";
        $nombre = readline("Entrez le $indexNombre nombre : \n");
    }
    return $nombre;
}


//Exercice 3
function tableauNotes(){
    system('clear'); 
    echo("*************************************\n"
        . "*          Le tableau de notes      *\n"
        . "*************************************\n\n");
    $quitter = "";
    $tabNotes = [];
    while($quitter != "quitter" && $quitter != "9"){
        echo("\n-------------------------------------------\n"
            ."Menu:\n"
            . "1. Notes initiales\n"
            . "2. Ajouter une note\n"
            . "3. Supprimer un élève\n"
            . "4. Calculer la moyenne de la classe\n"
            . "5. Trouver la note la plus élevée et la note la plus basse\n"
            . "6. Afficher les élèves au-dessus de la moyenne générale\n"
            . "7. Trier et afficher le tableau des notes\n"
            . "8. Afficher le tableau des notes\n"
            . "9. Quitter\n");
    
        $choix = strtolower(readline("Que souhaitez-vous faire ? : "));
    
        switch($choix){
            case 1:
                initNotes($tabNotes);
                break;
        
            case 2:
                addNote($tabNotes);
                break;
            
            case 3:
                suppEleve($tabNotes);
                break;
    
            case 4:
                moyClasse($tabNotes);
                break;

            case 5:
                upperLowerNote($tabNotes);
                break;
        
            case 6:
                eleveSupperieurMoy($tabNotes);
                break;
            
            case 7:
                trierTabNotes($tabNotes);
                break;
    
            case 8:
                affichTabNotes($tabNotes);
                break;
            
            case "quitter":
            case 9:
                echo"Au revoir !";
                break;
            
            default:
                echo("\n-------------------------------------------\n"
                    . "Choix invalide.\n\n");
                break;
        }
    }
    echo "Au revoir !";            
}

function initNotes($tabNotes){
    $notes = [];
    $nbEleves = verifNombreEtPositif(readline("Combien d'éléve y a t'il dans la classe ? : "));
    for($i=0; $i<=$nbEleves; $i++){
        echo "Élève n°" . ($i+1) . "/$nbEleves :\n";
        $nom = verifMot(readline("  Nom : ")); // TODO vérifier que le nom est composé uniquement de caractère
        echo "\n$nom\n";

        $note = noteCompriseEntre(readline("  Note : ")); // TODO vérifier que note est composé uniquement de chiffre et est entre 0 et 20
        echo "\n$note\n";

        array_push($notes, $note); // ! PBB
        $eleve = array([$nom] => $notes);
        array_push($tabNotes, $eleve);
    }
    return $tabNotes;
}

function addNote($tabNotes){
    return $tabNotes;
}

function suppEleve($tabNotes){
    return $tabNotes;
}

function moyClasse($tabNotes){

}

function upperLowerNote($tabNotes){
    // ! si plusieurs eleves ont la meme note, afficher tous les eleves en question
    $valeurMin = min($tabNotes);
    $valeurMax = max($tabNotes);
    $nomEleveNoteMin = array_search($valeurMin, $tabNotes);
    $nomEleveNoteMax = array_search($valeurMax, $tabNotes);

    echo "L'/Les élève(s) ayant la moins bonne note est/sont : $nomEleveNoteMin || Note : $valeurMin/20\n";
    echo "L'/Les élève(s) ayant la meilleur note est/sont : $nomEleveNoteMax || Note : $valeurMax/20\n";
}

function eleveSupperieurMoy($tabNotes){
    echo "Moyenne des notes : " . array_sum($tabNotes)/count($tabNotes);
}

function trierTabNotes($tabNotes){
    affichTabNotes(arsort($tabNotes));
}

function affichTabNotes($tabNotes){
    echo $tabNotes;    
}

function verifNombreEtPositif($nombre){
    while(!is_numeric($nombre) || $nombre<1){
        echo "Erreur ! Ce n'est pas un nombre ou le nombre n'est pas positif. Veuillez réessayer.\n";
        $nombre = readline("Combien d'éléve y a t'il dans la classe ? [nombre > 0] : ");
    }
    return $nombre;
}

function verifMot($mot){
    while(!ctype_alpha($mot)){
        echo "  Erreur ! Le nom ne doit pas comporter de chiffres ni de caractères spéciaux. Veuillez réessayer.\n";
        $mot = readline("  Nom : ");
    }
    return $mot;
}

function noteCompriseEntre($nombre){
    while(!is_numeric($nombre) || ($nombre<0 || $nombre>20)){
        echo "  Erreur ! Ce n'est pas un nombre ou le nombre n'est pas entre 0 et 20. Veuillez réessayer.\n";
        $nombre = readline("  Note : [0 > note > 20] : ");
    }
    return $nombre;
}


//Exercice 4
function chifoumi(){
    echo("****************************************\n"
        . "*          Le jeu du chifoumi          *\n"
        . "****************************************\n\n");
    $nomJoueur = verifMot(readline("Saisir votre nom de joueur : "));
    $scoreJoueur = 0;
    $scoreOrdi = 0;
    $choix = "";
    while($choix != "quitter" && $choix != "2"){
        echo("\n-------------------------------------------\n"
            ."Menu:\n"
            . "1. Jouer une manche\n"
            . "2. Quitter\n");
    
        $choix = strtolower(readline("Que souhaitez-vous faire ? : "));
    
        switch($choix){
            case 1:
                $manche = jeuChifoumi();
                if($manche == "joueurGagne"){
                    $scoreJoueur++;
                }elseif($manche == "ordiGagne"){
                    $scoreOrdi++;
                }
                break;
            
            case "quitter":
            case 2:
                break;
            
            default:
                echo("\n-------------------------------------------\n"
                    . "Choix invalide.\n\n");
                break;
        }
    }
    echo("Total de manches : " . ($scoreJoueur + $scoreOrdi) ."\n"
        . "Manche gagnées par le $nomJoueur : $scoreJoueur\n"
        . "Manche gagnées par l'ordinateur : $scoreOrdi\n\n");
    echo "Au revoir !";            
}

function jeuChifoumi(){
    $elemChifoumi = ["pierre","feuille","ciseaux"];
    $choixOrdi = $elemChifoumi[rand(0,2)];
    echo("\n-------------------------------------------\n"
            ."Que choisissez-vous:\n"
            . "1. Pierre\n"
            . "2. Feuille\n"
            . "3. Ciseaux\n");

    $choixJoueur = strtolower(readline("Votre choix : "));
    echo "Choix de l'ordinateur : $choixOrdi";

    if(($choixJoueur === "pierre" && $choixOrdi === "ciseaux") || ($choixJoueur === "feuille" && $choixOrdi === "pierre")|| ($choixJoueur === "ciseaux" && $choixOrdi === "feuille")){
        echo "\nVous avez gagné !\n";
        return "joueurGagne";
    }elseif(($choixOrdi === "pierre" && $choixJoueur === "ciseaux") || ($choixOrdi === "feuille" && $choixJoueur === "pierre")|| ($choixOrdi === "ciseaux" && $choixJoueur === "feuille")){
        echo "\nL'ordinateur à gagné !\n";
        return "ordiGagne";
    }else{
        echo "\nÉgalité !\n";
    }
}
?>