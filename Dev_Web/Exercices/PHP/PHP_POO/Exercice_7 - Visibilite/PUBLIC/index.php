<?php

class Plantes{

    public $nom;
    public $type;
    public $hauteur;
    public $dureeDeVie;
    public $famille;

    public function __construct($nom,$type,$hauteur,$dureeDeVie,$famille){
        $nom = $nom;
        $type = $type;
        $hauteur = $hauteur;
        $dureeDeVie = $dureeDeVie;
        $famille = $famille;
    }

}

$laPlante = new Plantes("Rose","Fleur",30,2,"Rosaceae");
echo $laPlante->nom;