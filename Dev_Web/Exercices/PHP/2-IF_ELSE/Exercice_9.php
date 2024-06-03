<?php
    //EXERCICE 9
    $sexe = readline("Indiquez votre sexe : ");
    $age = readline("Indiquez votre age : ");

    if($sexe == "Homme" && $age >= 20){
        echo "Vous êtes imposable";
    }elseif($sexe == "Femme" && $age >=18 && $age <=35 ){
        echo "Vous êtes imposable";
    }else{
        echo "Vous ne payez pas d'impots !";
    }
?>