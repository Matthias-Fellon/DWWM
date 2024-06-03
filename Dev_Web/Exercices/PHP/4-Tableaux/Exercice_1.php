<?php 
    $notes = [];
    $nbNotes = readline("Nombre de notes : ");
    for($i=0; $i<$nbNotes; $i++){
        $note = readline("Entrez une note : ");
        $notes[$i] = $note;
    }

    $moyenne = array_sum($notes)/count($notes);
    echo "Moyenne = " .$moyenne;
?>