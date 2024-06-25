<?php
abstract class Animal {
    //Attributs
    protected $nom;
    protected $age;

    //Constructeur
    public function __construct($nom, $age)
    {
        $this->nom = $nom;
        $this->age = $age;
    }

    //Getter
    public function getNom(){return $this->nom;}
    public function getAge(){return $this->age;}

    //Setter
    public function setNom($nom){$this->nom = $nom;}
    public function setAge($age){$this->age = $age;}

    //Methode abstraite
    abstract public function faireDuBruit();

    //Methode concrète
    public function bouger(){
        echo $this->nom . " bouge...<br>";
    }
}
?>