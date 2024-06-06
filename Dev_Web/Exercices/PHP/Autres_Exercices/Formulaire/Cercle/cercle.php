<?php ob_start(); ?>


<form action="traitement.php" method="POST">
    <label for="rayon">Entrez le rayon du cercle :</label>
    <input type="number" name="rayon" id="rayon"><br>
    <input type="submit" value="Calculer">
</form>

<?php
    $content = ob_get_clean();
    $titre = "Calcul sur le cercle";
    require "../template.php";
?>