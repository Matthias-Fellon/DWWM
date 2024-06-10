<?php ob_start(); ?>

<form action="radio.php" method="POST">
    <p>État civil :</p>

    <input type="radio" id="option1" name="option" value="Marié(e)">
    <label for="option1">Marié(e)</label>

    <input type="radio" id="option2" name="option" value="Célibataire">
    <label for="option2">Célibataire</label>

    <input type="radio" id="option3" name="option" value="Pacsé">
    <label for="option3">Pacsé</label>

    <input type="submit" value="Soumettre">
</form>

<?php
    if(isset($_POST['option'])){
        $option = $_POST['option'];
        echo "Vous avez selectionnez : " . $option;
    }else{
        echo "Aucune option sélectionnée ";
    }
?>

<?php
    $content = ob_get_clean();
    $titre = "Input radio";
    require "../template.php";
?>