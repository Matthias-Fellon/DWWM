<?php
//CALCUL CERCLE
//Vérification de la saisie
function verifierSaisieCercle($valeur){
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

//CALCULATRICE
//Vérification de la saisie
function verifierSaisieCalc($valeur){
    if(!is_numeric($valeur)){
        echo "Nombre invalide, recommencez : \n";
        return false;
    }
    return true;
}

//Fonction pour effectuer l'opération choisie par l'utilisateur
function calculatrice(float $nombre1, float $nombre2, string $operateur){
    $resultat = "";
    switch($operateur){
        case "+": 
            $resultat = $nombre1 + $nombre2;
            return "<p>Le résultat de l'addition est :$resultat</p>";
        
        case "-": 
            $resultat = $nombre1 - $nombre2;
            return "<p>Le résultat de la soustraction est :$resultat</p>";
        
        case "*":
            $resultat = $nombre1 * $nombre2;
            return "<p>Le résultat de la multiplication est :$resultat</p>";
        
        case "/":
            //Vérification du deuxième nombre
            if($nombre2 != 0){
                $resultat = $nombre1 / $nombre2;
                return "<p>Le résultat de la division est :$resultat</p>";
            }else{
                return "<p>Erreur, division par 0 impossible</p>";
            }
        default:
            return "<p>Choix invalide</p>";
    }
}

//TODO Fonction pour demander à l'utilisateur s'il veut continuer ou quitter
?>