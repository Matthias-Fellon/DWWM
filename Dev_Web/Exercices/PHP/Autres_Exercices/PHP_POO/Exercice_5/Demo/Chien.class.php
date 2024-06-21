<?php 
require_once "Animal.class.php";

class Chien extends Animal {
    public function parler(){
        return "WOOF !";
    }
}
?>