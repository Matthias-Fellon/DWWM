<?php
    $nbre = readline("Choissiez un 1er nombre : ");
    $nbre2 = readline("Choissiez un 2ème nombre : ");


    function pgcd($nbre, $nbre2 ) {
        while ($nbre2 != 0) {
            $nbre3  = $nbre2 ;
            $nbre2 = $nbre % $nbre2 ;
            $nbre = $nbre3 ;
        }
        echo "Le PGCM des deux nombres est : $nbre\n";
        return $nbre;
    }

    function ppcm($nbre, $nbre2) {
        $pgcd = pgcd($nbre, $nbre2);
        $ppcm = ($nbre * $nbre2) / $pgcd;
        return $ppcm;
    }

    echo ppcm($nbre, $nbre2);    
?>