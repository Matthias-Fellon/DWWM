<?php 
class Plante
{
    private $type;
    private $nom;
    private $hauteur;
    private $dureeVie;
    private $famille;

    //Constructeur
    public function __construct($type,$nom,$hauteur,$dureeVie,$famille)
    {
        $this->type = $type;
        $this->nom = $nom;
        $this->hauteur = $hauteur;
        $this->dureeVie = $dureeVie;
        $this->famille = $famille;
    }
    //Methode afficher les plantes
    public function affichage() {
        echo "Nom : $this->nom " . "<br>" 
            . "Type : $this->type " . "<br>"
            . "Hauteur : $this->hauteur " . "<br>"
            . "Durée de vie : $this->dureeVie " . "<br>"
            . "Famille : $this->famille " . "<br>"
            . "************************************<br>";
    }

    //getter
    public function getNom() {return $this->nom;}
    public function getType() {return $this->type;}
    public function getHauteur() {return $this->hauteur;}
    public function getDureeVie() {return $this->dureeVie;}
    public function getFamille() {return $this->famille;}

    //setter
    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function setHauteur($hauteur) {
        $this->hauteur = $hauteur;
    }

    public function setDureeVie($dureeVie) {
        $this->dureeVie = $dureeVie;
    }

    public function setFamille($famille) {
        $this->famille = $famille;
    }
}
?>