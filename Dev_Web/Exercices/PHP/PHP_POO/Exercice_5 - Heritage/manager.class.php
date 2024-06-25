<?php
require_once "employe.class.php";

class Manager extends Employe{
    //Attributs
    protected array $employesGeres;

    //Constructeur
    public function __construct($nom, $salaire, $employesGeres = [])
    {
        $this->nom = $nom;
        $this->salaire = $salaire;
        $this->employesGeres = $employesGeres;
    }

    //Getter
    public function getNom(){ return $this->nom; }
    public function getSalaire(){ return $this->salaire; }
    public function getEmployeGeres(){ return $this->employesGeres; }


    //Setter
    public function setNom($nom){ $this->nom = $nom; }
    public function setSalaire($salaire){ $this->salaire = $salaire; }
    public function setEmployeGeres($employesGeres){ $this->employesGeres = $employesGeres; }

    //Méthodes
    public function ajouterEmploye(Employe $employe) {
        $this->employesGeres[$employe->getNom()] = $employe->getSalaire();
    }

    public function afficherDetails() {
        return "Nom : " . $this->nom . " // Salaire : " . $this->salaire . " € // Employés Gerés : " . implode(", ", array_keys($this->employesGeres)) . "<br>";
    }
}

?>