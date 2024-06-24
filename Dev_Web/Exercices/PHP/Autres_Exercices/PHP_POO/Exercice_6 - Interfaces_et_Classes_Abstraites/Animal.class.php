<?php
require_once "interface.php";

abstract class Animal implements interfaces{
    //Attributs
    protected string $couleur;
    protected int $nombrePatte;

    //Constructeur
    public function __construct(string $couleur, int $nbPatte){
        $this->couleur = $couleur;
        $this->nombrePatte = $nbPatte;
    }

    //Getter
    public function getCouleur(){return $this->couleur;}
    public function getNbPattes(){return $this->nombrePatte;}

    //Setter
    public function setCouleur(string $couleur){$this->couleur = $couleur;}
    public function setNbPattes(int $nbPatte){$this->nombrePatte = $nbPatte;}
    
    //Methode abstraite
    abstract public function crier();
    
}
?>