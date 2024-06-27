<?php

class Plante{
    public $nom;
    public $type;
    public $hauteur;
    public $dureeDeVie;
    public $famille;

    public function __construct($nom,$type,$hauteur,$dureeDeVie,$famille){
        $this->nom = $nom;
        $this->type = $type;
        $this->hauteur = $hauteur;
        $this->dureeDeVie = $dureeDeVie;
        $this->famille = $famille;
    }

    public function setHauteur($hauteur){
        $this->hauteur = $hauteur;
    }

    //Méthode afficher les plantes
    public function afficher(){
        echo "Nom : $this->nom " . "<br>";
        echo "Type : $this->type " . "<br>";
        echo "Hauteur : $this->hauteur " . "<br>";
        echo "Durée de vie : $this->dureeDeVie " . "<br>";
        echo "Famille : $this->famille " . "<br>";
        echo "***************************************<br>";
    }


}