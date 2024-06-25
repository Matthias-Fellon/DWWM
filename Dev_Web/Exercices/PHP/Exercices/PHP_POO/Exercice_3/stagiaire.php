<?php 
class Stagiaire
{
    private string $nom;
    public array $notes;

    //Constructeur
    public function __construct(string $nom, array $notes)
    {
        $this->nom = $nom;
        $this->notes = $notes;
    }
    //Methode afficher l'éleve et ses notes
    public function afficher() {
        echo "Nom : $this->nom // "
            . "Notes : " . implode(" - ",$this->notes) . "<br>";
    }

    public function calculerMoyenne() {
        echo "Moyenne des notes : " . array_sum($this->notes)/count($this->notes) . "<br>";
    }

    public function trouverMax() {
        echo "Meilleur note : " . max($this->notes) . "<br>";
    }

    public function trouverMin() {
        echo "Pire note : " . min($this->notes) . "<br>";
    }

    //getter
    public function getNom() {return $this->nom;}
    public function getNotes() {return $this->notes;}

    //setter
    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setNotes($notes) {
        $this->notes = $notes;
    }
}
?>