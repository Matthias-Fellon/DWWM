<?php ob_start(); ?>

<?php
$email = "";
if (isset($_POST['email'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    // Vérifier Si l'e-mail est valide
    if ($email) {
        echo "<p>L'adresse e-mail saisie est : . $email</p>";
    } else {
        echo "<p>L'adresse e-mail non valide</p>";
    }
}
?>
<form action="securite.php" method="POST">
    <label for="email">Entrez votre adresse mail : </label><br>
    <input type="text" name="email" id="email">
    <input type="submit" value="Envoyer">
</form>

<?php
    $content = ob_get_clean();
    $titre = "Securite";
    require "../template.php";
?>