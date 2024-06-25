<?php
require_once "Humain.class.php";
require_once "Lapin.class.php";

class Chasseur extends Humain{
    //Attributs
    private string $arme; // ! PB

    //Constructeur
    public function __construct(string $nom, string $arme){
        parent::__construct($nom);
        $this->arme = $arme;
        echo "Le chasseur " . $this->nom . " a été créer avec un " . $this->arme . "<br>";
    }

    //Getter
    public function getArme(){return $this->arme;}

    //Setter
    public function setArme(string $arme){$this->arme = $arme;}

    //Méthodes
    public function seDeplacer(){
        echo $this->nom . " avance avec son " . $this->arme . "<br>";
    }

    public function chasser(Lapin $lapin){
        $chasse = rand(1,6);
        $touche = ($chasse == 1 || $chasse == 6);
        
        echo $this->nom . " tire sur le lapin avec son " . $this->arme . " et… " . ($touche ? "le touche" : "le rate") . "<br>";
        if ($touche) {
            $lapin->setEnVie(false);
        }
    }
}
?>