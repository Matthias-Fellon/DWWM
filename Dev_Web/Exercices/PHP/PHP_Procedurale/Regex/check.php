<?php

if(isset($_POST['phrase'])){
    $phrase = $_POST['phrase'];
    $majuscule = "/[A-Z]/";

    if(preg_match($majuscule,$phrase)){
        echo "La phrase contient des majuscules";
    }else{
        echo "Ne contient de majuscules";
    } 
}else{
    echo "Veuillez soumettre le formulaire";
}