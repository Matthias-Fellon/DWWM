<?php
    require "../fonctions.php";
    $rayon = $resultats = $message = "";

    if(isset($_POST['rayon'])){
        $rayon = $_POST['rayon']; 
        if(verifierSaisie($rayon)){
            $resultats = calculerCercle($rayon);
        }else{
            $message = "Veuillez entrer un nombre valide";
        }
    }
?>
<?php if($resultats): ?>
    <p>La circonference du cercle est : <?= $resultats['circonference']; ?></p>
    <p>La surface du cercle est : <?= $resultats['surface']; ?></p>
<?php endif; ?>

<?php if($message): ?>
    <p><?= $message; ?></p>
<?php endif; ?>