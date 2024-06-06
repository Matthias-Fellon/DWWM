<?php ob_start(); ?>


<form action="traitement.php" method="POST">
    <label for="nb1">Nombre 1 : </label>
    <input type="number" name="nombre1" id="nb1">

    <label for="nb2">Nombre 2 : </label>
    <input type="number" name="nombre2" id="nb2">

    <label for="operateur">Opération</label>
    <select name="operateur" id="operateur">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="submit" value="Calculer">
</form>

<?php
    $content = ob_get_clean();
    $titre = "Calculatrice";
    require "../template.php";
?>