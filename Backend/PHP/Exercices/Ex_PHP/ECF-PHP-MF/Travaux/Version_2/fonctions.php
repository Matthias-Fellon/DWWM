<?php
//Exercice 1 : Calcul sur le cercle

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
    
    $perimetre = round((2 * pi() * $rayon), 2, PHP_ROUND_HALF_UP); //Perimetre du cercle
    $aire = round((pi() * pow($rayon, 2)), 2, PHP_ROUND_HALF_UP);  //Aire du cercle

    return [
        'perimetre' => $perimetre,
        'aire' => $aire
    ];
}


//Exercice 2 : Calculatrice
function verifNombre($indexNombre){
    $nombre = readline("Entrez le $indexNombre nombre : \n");
    while(!is_numeric($nombre)){
        echo "Veuillez entrer un nombre valide.\n";
        $nombre = readline("Entrez le $indexNombre nombre : \n");
    }
    return $nombre;
}
?>