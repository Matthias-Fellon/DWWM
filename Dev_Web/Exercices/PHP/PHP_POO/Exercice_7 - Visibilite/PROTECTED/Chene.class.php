<?php
require_once "Plante.class.php";

class Chene extends Plante{

    private $couleur;

    public function __construct($nom,$type,$hauteur,$dureeDeVie,$famille,$couleur)
    {
        parent::__construct($nom,$type,$hauteur,$dureeDeVie,$famille);
        $this->couleur = $couleur;
    }
    public function getCouleur(){return $this->couleur; }

    public function setCouleur($couleur){
        $this->couleur = $couleur;
    }

    public function afficherChene(){
        $this->afficher();
        echo "Couleur : $this->couleur <br>"; 
    }

}