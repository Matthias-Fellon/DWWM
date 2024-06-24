<?php
require_once "interface.php";

abstract class Humain implements interfaces{
    //Attributs
    protected string $nom;

    //Constructeur
    public function __construct(string $nom){
        $this->nom = $nom;
    }

    //Getter
    public function getNom(){return $this->nom;}

    //Setter
    public function setNom(string $nom){$this->nom = $nom;}
}
?>