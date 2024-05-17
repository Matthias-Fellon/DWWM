<?php 
    $notes = [];
    $nbNotes = readline("Nombre de notes : ");
    for($i=0; $i<$nbNotes; $i++){
        $note = readline("Entrez une note : ");
        $notes[$i] = $note;
    }

    $somme = 0;
    foreach($notes as $index => $valeur){
        $somme = $somme + $valeur;  
    }
    echo "Moyenne = " .($somme/count($notes));
?>