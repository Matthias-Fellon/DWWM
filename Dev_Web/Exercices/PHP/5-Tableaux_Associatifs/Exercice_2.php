<?php
    $tabNotes = array("Boucher"=> 16, "Bourdette" => 13, "Dupuy" => 15, "Dufflou"=> 8, "Dubois" => 3, "Duchamps" => 12, "Duchenes" => 19, "Dumas" => 5);
    arsort($tabNotes);

    $mask = "|%-10.30s |%5.5s |\n";
    printf($mask, 'Nom eleve', 'Note');
    printf($mask, '', '');
    
    foreach($tabNotes as $key => $value){
        printf($mask, $key, $value);
    }
    echo "Moyenne des notes : " . array_sum($tabNotes)/count($tabNotes);

?>