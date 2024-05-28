<?php
$choix='';
while($choix != "Q" && $choix != "q"){
    system('clear');
    echo("\nQue choisissez-vous ?\n"
        . "1.Triangle isocèle\n"
        . "2.Triangle rectangle\n");

    $choix = readline("Votre choix : ");
    echo PHP_EOL;

    switch($choix){
        case 1:
            triangleIsocele();
            readline();
            break;
    
        case 2:
            triangleRectangle();
            readline();
            break;
    
        case "Q":
        case "q":
            readline("Au revoir !");
            break;
        
        default:
            readline("Erreur de synthaxe, veuillez réessayer !");
            break;
    }  
    system('clear');              
}

function triangleIsocele(){
    $taille = readline("Hauteur du triangle isocèle : ");
    
    // Afficher la partie ascendante du triangle
    for ($i = 0; $i < $taille; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "*";
        }
        echo "\n";
    }
    
    // Afficher la partie descendante du triangle
    for ($i = $taille - 1; $i > 0; $i--) {
        for ($j = 0; $j < $i; $j++) {
            echo "*";
        }
        echo "\n";
    }
}

function triangleRectangle() {
    $T = array();

    $taille = readline("Taille du triangle rectangle : ");
    $bordure = readline("Charactère pour les bordures : ");
    $interieur = readline("Charactère pour l'intérieur : ");
    
    for($i = 0; $i < $taille; $i++) {
        for($j = 0; $j <= $i; $j++) {
            if($j == 0 || $j == $i || $i == $taille - 1) {
                $T[$i][$j] = $bordure;
            }else{
                $T[$i][$j] = $interieur;
            }
        }
    }
    afficherTab($T);
}

function afficherTab($tab){
    for($i = 0; $i < count($tab); $i++) {
        for($j = 0; $j <= $i; $j++) {
            echo $tab[$i][$j];
        }
        echo "\n";
    }
}
?>