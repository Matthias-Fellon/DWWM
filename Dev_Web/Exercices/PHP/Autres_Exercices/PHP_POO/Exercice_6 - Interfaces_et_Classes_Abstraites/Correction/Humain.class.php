<?php

abstract class Humain implements Ideplacement{

    protected $nom;

    public function __construct($nom){
        $this->nom = $nom;
        echo "$this->nom a été crée<br>";
    }
   

}