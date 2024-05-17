<?php 
    $notes = [];
    $nbNotes = readline("Nombre de valeurs : ");
    for($i=0; $i<$nbNotes; $i++){
        $note = readline("Entrez une valeur : ");
        $notes[$i] = $note;
    }

    $positif = 0;
    $negatif = 0;

    foreach($notes as $valeur){
        if($valeur < 0){
            $negatif++; 
        }elseif($valeur > 0){
            $positif++;
        }
    }
    echo "Nombre négatifs : $negatif\n";
    echo "Nombre positifs : $positif";
?>