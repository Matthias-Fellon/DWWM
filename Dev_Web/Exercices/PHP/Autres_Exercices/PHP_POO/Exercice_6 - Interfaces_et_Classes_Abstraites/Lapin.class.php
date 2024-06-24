<?php
require_once "Animal.class.php";

class Lapin extends Animal{
    //Attributs
    private bool $enVie;

    //Constructeur
    public function __construct(string $couleur, int $nbPatte){
        parent::__construct($couleur, $nbPatte);
        $this->enVie = true;
        echo "<p>Le lapin " . $this->couleur . " à " . $this->nombrePatte . ($this->nombrePatte>=2 ? " pattes" : " patte") . " a été créer</p>";
    }

    //Getter
    public function getEnVie(){return $this->enVie;}

    //Setter
    public function setEnVie(bool $enVie){
        $this->enVie = $enVie;
        if(!$this->enVie){
            echo "<p>Le pauvre petit lapin " . $this->couleur . " est malheureusement mort</p>";
        }
    }

    //Méthodes
    public function crier(){
        echo "<p>Le lapin glapie de peur</p>";
    }
    
    public function seNourrir(){
        echo "<p>Le lapin se nourrit</p>";
    }

    public function fuir(){
        $this->seDeplacer();
    }

    public function seDeplacer(){
        echo "<p>Le lapin s'enfuit sur ses " . $this->nombrePatte . " pattes d’un seul bond !</p>";
    }
}
?>