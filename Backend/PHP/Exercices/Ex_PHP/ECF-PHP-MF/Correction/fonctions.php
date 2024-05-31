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