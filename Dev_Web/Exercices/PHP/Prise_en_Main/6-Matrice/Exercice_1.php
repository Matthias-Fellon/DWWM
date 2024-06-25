<?php
// Remplir le tableau avec des valeurs aléatoires entre 0 et 100
$T = array();
for($i = 0; $i < 9; $i++) {
    for($j = 0; $j < 13; $j++) {
        $T[$i][$j]= rand(0, 100);
    }
}

// Afficher le tableau
for($i = 0; $i < 9; $i++) {
    for($j = 0; $j < 13; $j++) {
        printf("%4d ", $T[$i][$j]);
    }
    echo PHP_EOL;
}

$valeurMax = -1;

for ($i = 0; $i < 9; $i++) {
    for ($j = 0; $j < 13; $j++) {
        $valeurMax = ($T[$i][$j] > $valeurMax) ? $T[$i][$j] : $valeurMax;
    }
}

echo "Valeur max = $valeurMax\n";

?>