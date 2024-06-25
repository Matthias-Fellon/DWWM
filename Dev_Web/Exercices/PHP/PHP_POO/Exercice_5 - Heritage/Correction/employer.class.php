<?php
class Employe {
    // Creation des attributs 
    protected $nom;
    protected $salaire;

    // Constructeur, permet lors d'instentation de la classe, de construire les classe en fonction des attributs
    public function __construct($nom, $salaire) {
        $this->nom = $nom;
        $this->salaire = $salaire;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getSalaire() {
        return $this->salaire;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setSalaire($salaire) {
        $this->salaire = $salaire;
    }

    public function afficherDetails() {
        echo "Nom : " . $this->nom . "<br>";
        echo "Salaire : " . $this->salaire . "€" . "<br>";
        echo "***************************************** <br>";
    }
}
?>