<?php

if (isset($_POST['phrase'])) {
    $pharse = $_POST['phrase'];
    $majuscule = "/[A-Z]/";

    if(preg_match($majuscule,$pharse)) {
        echo "La phrae contient des majuscules";
    } else {
        echo "La phrae ne contient pas des majuscules";
    }
} else {
    echo "Veuillez soumettre le formulaire";
}

?>