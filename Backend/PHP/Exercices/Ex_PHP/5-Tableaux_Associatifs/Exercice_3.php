<?php
$tabNotes = array("Boucher" => array(16,12,14), "Bourdette" => array(13,9,8), "Dupuy" => array(15,19,2), "Dufflou"=> array(8,11,1), "Dubois" => array(3,20,0), "Duchamps" => array(12,17,15), "Duchenes" => array(19,20,18), "Dumas" => array(5,4,3));
ksort($tabNotes);
$choix = '';

while($choix != "Q" && $choix != "q"){
    system('clear');
    echo("\n\nQue souhaitez-vous faire ?\n1.Afficher le nom et les notes des élèves\n2.Afficher le nom et la moyenne de chaque élève\n3.Afficher les notes et la moyenne d'un élève choisi\n\n");
    $choix = readline("Choix : ");

    switch($choix){
        case 1:
            $mask = "|%-12.30s |%6.6s |%6.6s |%6.6s |\n";
            printf($mask, 'Nom d\'eleve', 'Note 1', 'Note 2', 'Note 3');
            printf($mask, '', '', '', '', '', '');
        
            foreach($tabNotes as $key => $value){
                printf($mask, $key, $value[0], $value[1], $value[2]);
            }
            readline();
            break;

        case 2:
            $mask = "|%-12.30s |%7.7s |\n";
            printf($mask, 'Nom d\'eleve', 'Moyenne');
            printf($mask, '', '', '', '', '', '');
        
            foreach($tabNotes as $key => $value){
                printf($mask, $key, round((array_sum($value)/count($value)), 1, PHP_ROUND_HALF_UP));
            }
            readline();
            break;
            
        case 3:
            $nomEleve = '';
            $mask = "|%-12.30s |%6.6s |%6.6s |%6.6s |%7.7s |\n";

            while(!array_key_exists($nomEleve, $tabNotes)){
                $nomEleve = readline("De quel élève souhaitez vous afficher les notes ? ");
            }
            printf($mask, 'Nom d\'eleve', 'Note 1', 'Note 2', 'Note 3', 'Moyenne');
            printf($mask, '', '', '', '', '', '');
            printf($mask, $nomEleve, $tabNotes[$nomEleve][0], $tabNotes[$nomEleve][1], $tabNotes[$nomEleve][2], round((array_sum($tabNotes[$nomEleve])/count($tabNotes[$nomEleve])), 1, PHP_ROUND_HALF_UP));
            readline();
            break;
        
        case "Q":
        case "q":
            echo "Au revoir !\n";
            readline();
            break;
        
        default:
            echo "Erreur de synthaxe, veuillez reesayer !\n";
            readline();
            break;
    } 
    system('clear');
}
?>