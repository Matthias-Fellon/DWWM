<?php ob_start(); ?>

<?php
$nom = "";
if (isset($_POST['nom']) && ctype_alpha($_POST['nom'])) {
    $nom = trim($_POST['nom']);
    // Vérifier Si l'e-mail est valide
    echo "<p>L'adresse e-mail saisie est : . $nom</p>";
   
}

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

//TODO verifier : mdp et confirmation mdp, dateNaissance(age > 15ans)
?>
<form action="index.php" method="POST">
    <label for="nom">Entrez votre nom complet : </label><br>
    <input type="text" name="nom" id="nom"><br><br>

    <label for="email">Entrez votre adresse mail : </label><br>
    <input type="email" name="email" id="email"><br><br>

    <label for="MDP">Entrez votre mot de passe : </label><br>
    <input type="password" name="MDP" id="MDP"><br><br>

    <label for="confirmMDP">Confirmez votre mot de passe : </label><br>
    <input type="password" name="confirmMDP" id="confirmMDP"><br><br>

    <label for="dateNaissance">Entrez date de naissance : </label><br>
    <input type="date" name="dateNaissance" id="dateNaissance"><br><br>

    <p>Sexe : </p><br>
    <input type="radio" name="sexe" id="option1" value="homme">
    <label for="option1">homme</label>
    <input type="radio" name="sexe" id="option2" value="femme">
    <label for="option2">femme</label>
    <input type="radio" name="sexe" id="option3" value="autre">
    <label for="option3">autre</label>
    <input type="radio" name="sexe" id="option4" value="ne sais pas">
    <label for="option4">ne sais pas</label><br><br>

    <input type="submit" value="Soumettre">
</form>

<?php
    $content = ob_get_clean();
    $titre = "faille_XSS";
    require "template.php";
?>