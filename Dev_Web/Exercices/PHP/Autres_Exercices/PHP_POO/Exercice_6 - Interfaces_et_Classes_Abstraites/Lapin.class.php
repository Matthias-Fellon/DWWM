<?php
require_once "Animal.class.php";

class Lapin extends Animal{
    //Attributs
    protected bool $enVie;

    //Constructeur
    public function __construct($couleur, $nbPatte){
        parent::__construct($couleur, $nbPatte);
        $this->enVie = true;
        echo "<p>Le lapin " . $couleur . " à " . $nbPatte . ($nbPatte>=2 ? " pattes" : " patte") . " a été créer</p>";
    }

    //Getter
    public function getEnVie(){return $this->enVie;}

    //Setter
    public function setEnVie($enVie){$this->enVie = $enVie;}

    //Méthodes
    public function crier(){
        echo "<p>Le lapin glapie de peur</p>";
    }
    
    public function seNourrir(){
        echo "<p>Le lapin se nourrit</p>";
    }

    public function fuir(){
        echo "<p>Le lapin s'enfuit sur ses 4 pattes d’un seul bond !</p>";
    }

    public function seDeplacer(){
        echo "<p>Le lapin se déplace</p>";
    }
}
?>