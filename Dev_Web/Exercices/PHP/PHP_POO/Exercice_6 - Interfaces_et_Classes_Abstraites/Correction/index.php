<?php
require_once "Lapin.class.php";
require_once "Chasseur.class.php";

$lapin  = new Lapin("lapin blanc",4);
$chasseur = new Chasseur("Paul", "fusil");

$lapin->seNourrir();

while($lapin->estEnVie()){
    $chasseur->seDeplacer();
    $lapin->crier();
    $chasseur->chasser($lapin);

    if(!$lapin->estEnVie()){
        break;
    }
    $lapin->fuir();
    echo "**********************************<br>";
}
echo "Le programme est terminé car le lapin est mort";


// //Test de la méthode getEnvie et setEnvie
// echo "Test de modification de l'état du lapin : <br>";
// echo "Initialement, le lapin est en vie " . ($lapin->estEnVie() ? 'Oui' : "Non") . "<br>";

// $lapin->setEnvie(true);
// echo "Après avoir modifié l'état, le lapin est en vie " . ($lapin->estEnVie() ? 'Oui' : "Non") . "<br>";
?>