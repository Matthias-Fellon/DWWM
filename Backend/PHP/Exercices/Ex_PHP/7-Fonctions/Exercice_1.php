<?php
$choix='';
while($choix != "Q" && $choix != "q"){
    echo("\nQue choisissez-vous ?[1-7 ou Q/q]\n"
        . "1.Calcul prix TTC\n"
        . "2.Calcul PGCD\n"
        . "3.Calcul PPCM\n"
        . "4.Table de multiplication\n"
        . "5.Factorielle\n"
        . "6.Somme des valeurs de tableaux\n"
        . "7.Triangle isocèle\n");

    $choix = readline("Votre choix : ");
    echo PHP_EOL;

    switch($choix){
        case 1:
            prixTTC();
            break;
    
        case 2:
            PGCD();
            break;
        
        case 3:
            PPCM();
            break;

        case 4:
            tableMult();
            break;

        case 5:
            factorielle();
            break;

        case 6:
            sommeTab();
            break;

        case 7:
            triangleIsocele();
            break;

        case "Q":
        case "q":
            echo "Au revoir !";
            break;
        
        default:
            readline("Erreur de synthaxe, veuillez réessayer !");
            break;
    }  
    readline();
    system('clear');              
}

function prixTTC(){
    $prixHorsTaxe = readline("Entrez un prix HT : ");
    $qteArticle = readline("Entrez le nombre d'articles : ");
    $tauxTVA = readline("Entrez la TVA : ");

    $prixAvecTaxe = $prixHorsTaxe + ($prixHorsTaxe * $tauxTVA / 100);

    echo "Le prix total TTC de cette/ces article(s) est de : " . ($prixAvecTaxe * $qteArticle) . " €" ;
}

function PGCD(){
    $nombre1 = readline("Entrez un premier nombre : ");
    $nombre2 = readline("Entrez un deuxième nombre : ");
    
    while ($nombre2 != 0) {
        $temp = $nombre2;
        $nombre2 = $nombre1 % $nombre2;
        $nombre1 = $temp;
    }  
    echo "Le PGCD de ces deux  nombre est : $nombre1\n";
}

function PPCM(){
    $nombre1 = readline("Entrez un premier nombre : ");
    $nombre2 = readline("Entrez un deuxième nombre : ");
    
    while ($nombre2 != 0) {
        $temp = $nombre2;
        $nombre2 = $nombre1 % $nombre2;
        $nombre1 = $temp;
    }  
    $pgcd = $nombre1;
    echo "Le PGCD de ces deux nombre est : $pgcd\n";

    $ppcm = ($nombre1 * $nombre2) / $pgcd;
    echo "Le PPCM de ces deux nombre est : $ppcm\n";; 
}

function tableMult(){
    $nombre = readline ("Table de multiplication du nombre : ");
    $debutTab = readline ("Début de la table de multiplication : ");
    $FinTab = readline ("Fin de la table de multiplication : ");
    
    for($i=$debutTab; $i<=$FinTab; $i++){
        echo "$i x $nombre = " . ($i*$nombre) . "\n";
    }
}

function factorielle(){
    $nombre = readline("Entrez un nombre : ");
    $result = 1;
    echo "La factorielle de $nombre vaut : ";
    for($i=1; $i<=$nombre; $i++){
        $result = $result * $i;
    }
    echo ($result);
}

function sommeTab(){
    // ! creer un tableau de tableau, le but étant d'additionner tout les tableaux contenur dans le tableau mère ensemble et  d'afficher le résultat
    $tab_1 = creerTab();
    $tab_2 = creerTab();

    afficherTab($tab_1, "Tableau 1");
    afficherTab($tab_2, "Tableau 2");


    for($i=0; $i<count($tab_1); $i++){
        $tab_3[$i] = $tab_1[$i] + $tab_2[$i];
    }

    afficherTab($tab_3, "Tableau 3");
}

function creerTab(){
    $tab = [];
    $tabLength = readline("Longueur du tableau : ");
    for($i=0; $i<$tabLength; $i++){
        $tab[$i] = readline("Entrez une valeur : ");
    }
    return $tab;
}

function triangleIsocele(){
    // ! changer pour qu'au lieu des echo ça stock dans une matrice
    $taille = readline("Hauteur du triangle isocèle : ");
    
    //Première partie du triangle
    for($i = 0; $i < $taille; $i++) {
        for($j = 0; $j <= $i; $j++) {
            echo "*";
        }
        echo "\n";
    }

    //Deuxième partie du triangle
    for($i = $taille - 1; $i > 0; $i--) {
        for($j = 0; $j < $i; $j++) {
            echo "*";
        }
        echo "\n";
    }
}

function afficherMatrice($matrice){
    for($i = 0; $i < count($matrice); $i++) {
        for($j = 0; $j <= $i; $j++) {
            echo $matrice[$i][$j];
        }
        echo "\n";
    }
}

function afficherTab($tab, $nomTab){
    echo "$nomTab : ";
    foreach($tab as $index => $valeur){ 
        echo "$valeur ";
    }
    echo "\n";
}
?>