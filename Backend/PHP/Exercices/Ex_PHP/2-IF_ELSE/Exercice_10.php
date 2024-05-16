<?php
    //EXERCICE 10
    $annee = readline("Donnez une date : ");
    if(($annee % 4) == 0 && ($annee % 400 === 0 || !($annee % 100 === 0))){
        echo "Cette année est bissextile";
    }else{
        echo "Cette année n'est pas bissextile";
    }
?>