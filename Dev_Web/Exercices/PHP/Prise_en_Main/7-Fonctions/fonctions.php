<?php
// TODO Améliorer les fonctions sommeValeurTab(), triangleIsocele() et sommeTab()
function prixTTC(){
    $prixHorsTaxe = readline("Entrez un prix HT : ");
    $qteArticle = readline("Entrez le nombre d'articles : ");
    $tauxTVA = readline("Entrez la TVA : ");

    $prixAvecTaxe = $prixHorsTaxe + ($prixHorsTaxe * $tauxTVA / 100);

    echo "Le prix total TTC de cette/ces article(s) est de : " . ($prixAvecTaxe * $qteArticle) . " €" ;
}

function calculPGCD($nombre1, $nombre2){
    while ($nombre2 != 0) {
        $temp = $nombre2;
        $nombre2 = $nombre1 % $nombre2;
        $nombre1 = $temp;
    }
    return $nombre1;
}

function PGCD(){
    $nombre1 = readline("Entrez un premier nombre : ");
    $nombre2 = readline("Entrez un deuxième nombre : ");

    $pgcd = calculPGCD($nombre1, $nombre2);
    echo "Le PGCD de ces deux nombre est : $pgcd\n";
};

function PPCM(){
    $nombre1 = readline("Entrez un premier nombre : ");
    $nombre2 = readline("Entrez un deuxième nombre : ");
    
    $pgcd = calculPGCD($nombre1, $nombre2);
    echo "Le PGCD de ces deux nombre est : $pgcd\n";

    $ppcm = ($nombre1 * $nombre2) / $pgcd;
    echo "Le PPCM de ces deux nombre est : $ppcm\n"; 
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

function sommeValeursTab($tab){
    // ! proposer 2 choix : 1 avec tableaux préremplie et 1 avec valeur saisi par l'utilisateur 
    echo "Tableau : ";
    foreach($tab as $valeur){ 
        echo "$valeur ";
    }

    echo "\nSomme du tableau = " . array_sum($tab);
}

function creerTab($tabLength){
    $tab = [];
    for($i=0; $i<$tabLength; $i++){
        $tab[$i] = readline("Entrez la valeur " . ($i+1) . " : ");
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
    foreach($tab as $valeur){ 
        echo "$valeur ";
    }
    echo "\n";
}

function sommeTab(){
    $tabMere = [];
    $tabFinal = [];

    echo("\nQue choisissez-vous ?[1-2]\n"
        . "1.Valeurs déjà écrites\n"
        . "2.Écrire mes valeurs\n");

    $choix = readline("Votre choix : ");
    echo PHP_EOL;

    switch($choix){
        case 1:
            $tabMere[0] = [4, 8, 7, 9, 1, 5, 4, 6];
            $tabMere[1] = [7, 6, 5, 2, 1, 3, 7, 4];
            break;

        case 2:
            $nbTab = readline("Combien de tableaux souhaitez-vous créer ? ");
            $tabLength = readline("Longueur du tableau : ");
            // ! creer un tableau de tableau, le but étant d'additionner tout les tableaux contenur dans le tableau mère ensemble et  d'afficher le résultat
            for($i = 0; $i < $nbTab; $i++){
                echo "Tableau " . ($i+1) . " : \n";
                $tabMere[$i] = creerTab($tabLength);
            }
            break;
        
        default:
            echo "Erreur de synthaxe, veuillez réessayer !";
            break;

    }

    for($i=0; $i<count($tabMere); $i++){
        for($j=0; $j<count($tabMere[$i]);$j++){
            echo "TabMere [$i][$j] : " . $tabMere[$i][$j] . "\n";
            echo "TabFinal [$i] avant : " . $tabFinal[$i] . "\n";
            $tabFinal[$i] = $tabFinal[$i] + $tabMere[$i][$j];
            echo "TabFinal [$i] après : " . $tabFinal[$i] . "\n";
        }
    }

    for($i = 0; $i < $nbTab; $i++){
        afficherTab($tabMere[$i], "Tableau " . ($i+1) . " : ");
    }

    afficherTab($tabFinal, "Tableau final : ");
}
?>