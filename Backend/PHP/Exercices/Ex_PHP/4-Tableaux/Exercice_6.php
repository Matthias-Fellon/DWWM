<?php
    function verifValeurPositive($valeur){
        while($valeur <= 0){
            $valeur = readline("Entrez une valeur positive : ");
        }
        return $valeur;
    }

    $notes = [];
    $nbNotes = readline("Nombre de notes : ");

    //Saisir les notes du tableau
    for($i=0; $i<$nbNotes; $i++){
        $notes[$i] = verifValeurPositive(readline("Entrez une note : "));
    }
    
    //Afficher le tableau de note
    echo "\nNotes : ";
    foreach($notes as $index => $valeur){ 
        echo "$valeur ";
    }

    //Afficher la moyenne
    $moyenne = array_sum($notes)/$nbNotes;
    echo "\nMoyenne de classe = " . $moyenne;
    

    $nbNotesSupMoy = 0;
    //Calcul des notes supérieurs à la moyenne
    echo "\nNotes supérieurs à la moyenne : ";
    foreach($notes as $valeur){
        if($valeur > $moyenne){
            $nbNotesSupMoy++;
            echo "$valeur ";
        }
    }
    echo "\nLe nombre de notes supérieurs à la moyenne et de $nbNotesSupMoy";
?>