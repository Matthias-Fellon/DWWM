<?php

class Employe {
    //Attributs
    protected string $nom;
    protected float $salaire;

    //Constructeur
    public function __construct($nom, $salaire)
    {
        $this->nom = $nom;
        $this->salaire = $salaire;
    }

    //Getter
    public function getNom(){ return $this->nom; }
    public function getSalaire(){ return $this->salaire; }


    //Setter
    public function setNom($nom){ $this->nom = $nom; }
    public function setSalaire($salaire){ $this->salaire = $salaire; }


    //Méthodes
    public function afficherDetails() {
        return "Nom : $this->nom // Salaire : $this->salaire <br>";
    }
}

?>