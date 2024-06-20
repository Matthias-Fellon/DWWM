<?php 
class Voiture
{
    private $marque;
    private $modele;
    private $annee;
    private $couleur;
    public $vitesseActuelle;

    //Constructeur
    public function __construct($marque,$modele)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->vitesseActuelle = 0;
    }
    //Methode afficher la voiture
    public function afficher() {
        echo "$this->marque - "
            . "Modèle : $this->modele - "
            . "($this->annee) - "
            . "$this->couleur - "
            . "Vitesse : $this->vitesseActuelle km/h"
            . "<br>************************************************<br>";
    }

    public function accelerer($vitesse) {
        $this->vitesseActuelle += $vitesse;
    }

    //getter
    public function getMarque() {return $this->marque;}
    public function getModele() {return $this->modele;}
    public function getAnnee() {return $this->annee;}
    public function getCouleur() {return $this->couleur;}
    public function getVitesse() {return $this->vitesseActuelle;}

    //setter
    public function setMarque($marque) {
        $this->marque = $marque;
    }

    public function setModele($modele) {
        $this->modele = $modele;
    }

    public function setAnnee($annee) {
        $this->annee = $annee;
    }

    public function setCouleur($couleur) {
        $this->couleur = $couleur;
    }

    public function setVitesse($vitesseActuelle) {
        $this->vitesseActuelle = $vitesseActuelle;
    }
}
?>