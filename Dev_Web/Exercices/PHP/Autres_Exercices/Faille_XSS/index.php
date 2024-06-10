<?php ob_start(); ?>

<form action="infoUser.php" method="POST">
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
    <label for="option3">autre</label><br><br>

    <input type="submit" value="Soumettre">
</form>

<?php
    $content = ob_get_clean();
    $titre = "Faille_XSS";
    require "template.php";
?>