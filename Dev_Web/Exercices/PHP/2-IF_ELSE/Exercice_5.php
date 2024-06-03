<?php
    //EXERCICE 5
    $age = readline("Inscrivez un âge pour un enfant : ");

    switch(true){
        case ($age>=6 && $age<=7):
            echo "L'enfant est dans la catégorie \"Poussin\".";
            break;
        
        case($age>=8 && $age<=9):
            echo "L'enfant est dans la catégorie \"Pupille\".";
            break;
        
        case($age>=10 && $age<=11):
            echo "L'enfant est dans la catégorie \"Minime\".";
            break;
        
        case($age>=12):
            echo "L'enfant est dans la catégorie \"Cadet\".";
            break;
        
        default:
            echo "L'enfant n'est pas dans une catégorie.";
            break;
    }
?>