<?php ob_start(); ?>

<form action="formulaire.php" method="post">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" required><br>

    <label for="email">Email :</label>
    <input type="email" name="email" id="email" required><br>

    <label for="description">Description :</label>
    <input type="text" name="description" id="description" required><br>

    <input type="submit" value="Envoyer">
    <?php
        if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['description'])){
            $name = $_POST['nom'];
            $email = $_POST['email'];
            $desc = $_POST['email'];
            echo "<p>Nom : $name </p>";
            echo "<p>Email : $email </p>";
            echo "<p>Description : $desc </p>";
        }else{
            echo "<p>Aucune donnée soumise.</p>";
        }
    ?>
</form>

<?php
    $content = ob_get_clean();
    $titre = "Exemple de formulaire";
    require "../template.php";
?>