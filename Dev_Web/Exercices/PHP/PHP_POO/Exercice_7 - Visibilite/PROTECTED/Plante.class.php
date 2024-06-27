<?php

class PLante{
    protected $nom;
    protected $type;
    protected $hauteur;
    protected $dureeDeVie;
    protected $famille;

    public function __construct($nom,$type,$hauteur,$dureeDeVie,$famille){
        $this->nom = $nom;
        $this->type = $type;
        $this->hauteur = $hauteur;
        $this->dureeDeVie = $dureeDeVie;
        $this->famille = $famille;
    }

    public function setHauteur($hauteur){
        echo "*******************************************<br>";
        $this->hauteur = $hauteur;

    }
    protected function afficher(){
        echo "Nom : $this->nom <br>";
        echo "Nom : $this->nom " . "<br>";
        echo "Type : $this->type " . "<br>";
        echo "Hauteur : $this->hauteur " . "<br>";
        echo "Durée de vie : $this->dureeDeVie " . "<br>";
        echo "Famille : $this->famille " . "<br>";
       
    }



}