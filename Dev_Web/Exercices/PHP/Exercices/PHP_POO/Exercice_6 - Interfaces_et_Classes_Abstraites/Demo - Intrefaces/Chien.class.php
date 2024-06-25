<?php

require_once "iAnimal.class.php";

class Chien implements iAnimal{
    public function faireDuBruit(){
        echo "woof...<br>";
    }

    public function bouger(){
        echo "Le chien cours<br>";
    }
}
?>