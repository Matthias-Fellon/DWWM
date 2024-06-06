<?php
    require "../fonctions.php";
    $nb1 = $nb2 = $operateur = $resultat = $message = "";

    if(isset($_POST['nombre1']) && isset($_POST['nombre2']) && isset($_POST['operateur'])){
        $nb1 = $_POST['nombre1'];
        $nb2 = $_POST['nombre2'];
        $operateur = $_POST['operateur'];
        if(verifierSaisie($nb1) && verifierSaisie($nb2)){
            $resultat = calculatrice($nb1, $nb2, $operateur);
        }else{
            $message = "Veuillez entrer un nombre valide";
        }
    }
?>
<?php if($resultat): ?>
    <p>Calcul : <?= $nb1; ?> <?= $operateur; ?> <?= $nb2; ?> = <?= $resultat; ?></p>
<?php endif; ?>

<?php if($message): ?>
    <p><?= $message; ?></p>
<?php endif; ?>