<?php
require_once "stagiaire.php";

$stagiaires =[
    "Martin" => new Stagiaire("Martin", [rand(0,20), rand(0,20), rand(0,20)]),
    "Paul" => new Stagiaire("Paul", [rand(0,20), rand(0,20), rand(0,20)]),
    "Nicolas" => new Stagiaire("Nicolas", [rand(0,20), rand(0,20), rand(0,20)])
];

foreach ($stagiaires as $stagiaire) {
    $stagiaire->afficher();
    $stagiaire->calculerMoyenne();
    $stagiaire->trouverMin();
    $stagiaire->trouverMax();
    echo "************************************************<br>";
}
?>