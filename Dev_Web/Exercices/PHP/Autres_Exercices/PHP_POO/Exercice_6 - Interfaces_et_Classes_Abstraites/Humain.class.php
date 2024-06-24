<?php
require_once "interface.php";

abstract class Humain implements interfaces{
    //Attributs
    protected string $nom;

    //Constructeur
    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    //Getter
    public function getNom(){return $this->nom;}

    //Setter
    public function setNom($nom){$this->nom = $nom;}
}
?>