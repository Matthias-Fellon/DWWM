<?php
    $prenoms = ["Pierre", "Paul", "Jacques"];
    for($i=0; $i<count($prenoms); $i++){
        echo $i . ":" . $prenoms[$i] . "\n";
    }

    foreach($prenoms as $index => $values){
        echo $index . ":" . $values . "\n";
    }
?>