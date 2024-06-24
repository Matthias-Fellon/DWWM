<?php
require_once "Lapin.class.php";
require_once "Chasseur.class.php";

$lapin = new Lapin("blanc", 4);
$chasseur = new Chasseur("Paul", "fusil");

$lapin->seNourrir();
while ($lapin->getEnVie()) {
    $chasseur->seDeplacer();
    $lapin->crier();
    $chasseur->chasser($lapin);

    if ($lapin->getEnVie()) {
        $lapin->fuir();
    } else {
        echo "<p>Le pauvre petit lapin " . $lapin->getCouleur() . " est malheureusement mort</p>";
    }
    echo "**********************************<br>";
}
?>