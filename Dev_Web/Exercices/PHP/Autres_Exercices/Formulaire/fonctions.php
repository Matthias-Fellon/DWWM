<?php
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

//fonction pour effectuer l'opération choisie par l'utilisateur

function calculatrice(float $nombre1, float $nombre2, string $operateur){
    $resultat = "";
    switch($operateur){
        case "+": 
            $resultat = $nombre1 + $nombre2;
            break;
        
        case "-": 
            $resultat = $nombre1 - $nombre2;
            break;
        
        case "*":
            $resultat = $nombre1 * $nombre2;
            break;
        
        case "/":
            //Vérification du deuxième nombre
            if($nombre2 != 0){
                $resultat = $nombre1 / $nombre2;
            }else{
                echo "erreur : division par zéro \n";
            }
            break;
        default:
        echo "Choix invalide\n";
    }
    return $resultat;
}

//Fonction pour demander à l'utilisateur s'il veut continuer ou quitter
?>