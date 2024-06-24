<?php
require_once "Humain.class.php";

class Chasseur extends Humain{
    //Attributs
    private string $arme;

    //Constructeur
    public function __construct($nom, $arme){
        parent::__construct($nom);
        $this->arme = $arme;
        echo "<p>Le chasseur " . $nom . " a été créer avec un " . $arme . "</p>";
    }

    //Getter
    public function getArme(){return $this->arme;}

    //Setter
    public function setArme($arme){$this->arme = $arme;}

    //Méthodes
    public function chasser(Lapin $lapin){
        $test = rand(1,6);
        $touche = ($test == 1 || $test == 6);
        
        if ($touche) {
            $lapin->setEnVie(false);
        }
        
        echo "<p>" . $this->nom . " tire sur le lapin avec son " . $this->arme . " et… " . ($touche ? "le touche" : "le rate") . "</p>";
    }
    

    public function seDeplacer(){
        echo "<p>" . $this->nom . " avance avec son " . $this->arme . "</p><b";
    }
}
?>