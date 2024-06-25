<?php
require_once "Humain.class.php";
require_once "Lapin.class.php";

class Chasseur extends Humain{
    //Attributs
    private $arme;

    //Constructeur
    public function __construct(string $nom, string $arme){
        parent::__construct($nom);
        $this->arme = $arme;
        echo "$this->nom a été crée avec un $this->arme<br>";
    }

    public function seDeplacer()
    {
        echo "$this->nom avance avec son $this->arme<br>";
    }

    public function chasser(Lapin $lapin){
        echo "$this->nom tire sur le lapin avec son $this->arme et...";
        $chasse = rand(1,6);
        if($chasse == 1 || $chasse == 6){
            echo " le touche<br>";
            $lapin->setEnvie(false);
        }else{
            echo " le rate<br>";
        }
    }
   
}