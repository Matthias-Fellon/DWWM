<?php
require_once "iDeplacement.class.php";

abstract class Animal implements iDeplacement{
    protected $couleur;
    protected $nombrePatte;

    public function __construct(string $couleur, int $nombrePatte){
        $this->couleur = $couleur;
        $this->nombrePatte = $nombrePatte;
        echo "Le lapin " .$this->couleur . " à " . $this->nombrePatte . "pattes a été crée<br>";
    }

    abstract public function crier();
 
}