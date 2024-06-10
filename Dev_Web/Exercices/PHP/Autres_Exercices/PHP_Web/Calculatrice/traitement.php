<?php
    require "../fonctions.php";
    ob_start();
    $resultat = "";

    if(isset($_POST['nombre1'], $_POST['nombre2'], $_POST['operateur'])){
        $nb1 = $_POST['nombre1'];
        $nb2 = $_POST['nombre2'];
        $operateur = $_POST['operateur'];
        if(verifierSaisieCalc($nb1) && verifierSaisieCalc($nb2)){
            $resultat = calculatrice($nb1, $nb2, $operateur);
        }else{
            $resultat = "<p>Veuillez entrer un nombre valide</p>";
        }
    }
?>

<div>
    <?= $resultat ?>
</div>

<?php
    $content = ob_get_clean();
    $titre = "Résultat de l'opération";
    require "../template.php";
?>