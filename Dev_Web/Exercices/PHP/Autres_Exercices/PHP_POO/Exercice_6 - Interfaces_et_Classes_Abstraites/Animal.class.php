<?php
require_once "interface.php";

abstract class Animal implements interfaces{
    //Attributs
    private string $couleur;
    private int $nombrePatte;

    //Constructeur
    public function __construct($couleur, $nbPatte)
    {
        $this->couleur = $couleur;
        $this->nombrePatte = $nbPatte;
    }

    //Getter
    public function getCouleur(){return $this->couleur;}
    public function getNbPattes(){return $this->nombrePatte;}

    //Setter
    public function setCouleur($couleur){$this->couleur = $couleur;}
    public function setNbPattes($nbPatte){$this->nombrePatte = $nbPatte;}
    
    //Methode abstraite
    abstract public function crier();
    
}
?>