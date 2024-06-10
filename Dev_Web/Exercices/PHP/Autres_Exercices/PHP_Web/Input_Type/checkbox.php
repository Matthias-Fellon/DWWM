<?php ob_start(); ?>

<form action="checkbox.php" method="POST">
    <p>Intérêt :</p>

    <label for="music">Musique</label>
    <input type="checkbox" name="interet[]" value="musique" checked >

    <label for="Voyage">Voyages</label>
    <input type="checkbox" name="interet[]" value="voyage"  >

    <label for="lecture">Lecture</label>
    <input type="checkbox" name="interet[]" value="lecture"  >

    <label for="cinema">Cinéma</label>
    <input type="checkbox" name="interet[]" value="cinema" checked >

    <input type="submit" value="Envoyer">
</form>

<?php
    if(isset($_POST['interet']) && is_array($_POST['interet'])){
        $interets = $_POST['interet'];

        foreach($interets as $interet){
            echo ($interet) . "<br>";
        }
    }else{
        echo "Aucun intéret selectioné";
    }
?>
<?php
    $content = ob_get_clean();
    $titre = "Input checkbox";
    require "../template.php";
?>