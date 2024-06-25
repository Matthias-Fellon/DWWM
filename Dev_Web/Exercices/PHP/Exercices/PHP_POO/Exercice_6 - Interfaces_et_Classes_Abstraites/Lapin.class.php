<?php
require_once "Animal.class.php";

class Lapin extends Animal{
    //Attributs
    private bool $enVie;

    //Constructeur
    public function __construct(string $couleur, int $nbPatte){
        parent::__construct($couleur, $nbPatte);
        $this->enVie = true;
        echo "Le lapin " . $this->couleur . " à " . $this->nombrePatte . ($this->nombrePatte>=2 ? " pattes" : " patte") . " a été créer <br>";
    }

    //Getter
    public function getEnVie(){return $this->enVie;}

    //Setter
    public function setEnVie(bool $enVie){
        $this->enVie = $enVie;
        if(!$this->enVie){
            echo "Le pauvre petit lapin " . $this->couleur . " est malheureusement mort <br>";
        }
    }

    //Méthodes
    public function crier(){
        echo "Le lapin glapie de peur <br>";
    }
    
    public function seNourrir(){
        echo "Le lapin se nourrit <br>";
    }

    public function fuir(){
        $this->seDeplacer();
    }

    public function seDeplacer(){
        echo "Le lapin s'enfuit sur ses " . $this->nombrePatte . " pattes d’un seul bond ! <br>";
    }
}
?>