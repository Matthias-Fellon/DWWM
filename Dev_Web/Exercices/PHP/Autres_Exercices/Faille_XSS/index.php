<?php
session_start();
ob_start();
// Variables pour stocker les messages d'erreur
$errors = [];

// Vérification du formulaire soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des valeurs du formulaire
    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);
    $MDP = trim($_POST['MDP']);
    $confirmMDP = trim($_POST['confirmMDP']);
    $dateNaissance = trim($_POST['dateNaissance']);
    $sexe = trim($_POST['sexe']);

    // Validation des champs
    if (empty($nom)) {
        $errors['nom'] = "Le nom est obligatoire.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Une adresse email valide est obligatoire.";
    }

    if (empty($MDP) || strlen($MDP) < 8) {
        $errors['MDP'] = "Le mot de passe doit avoir au moins 8 caractères.";
    }

    if ($MDP !== $confirmMDP) {
        $errors['confirmMDP'] = "La confirmation du mot de passe ne correspond pas.";
    }

    if (empty($dateNaissance)) {
        $errors['dateNaissance'] = "La date de naissance est obligatoire.";
    } else {
        $dateNaissanceTimestamp = strtotime($dateNaissance);
        $age = (time() - $dateNaissanceTimestamp) / (365 * 24 * 60 * 60);
        if ($age < 18) {
            $errors['dateNaissance'] = "Vous devez être majeur pour vous inscrire.";
        }
    }

    if (empty($sexe)) {
        $errors['sexe'] = "Veuillez selectionner votre sexe.";
    }

    if (empty($errors)) {
        //Stocker des infos dans la session
        $_SESSION['username'] = $nom;
        $_SESSION['email'] = $email;
        $_SESSION['MDP'] = $MDP;
        $_SESSION['dateNaissance'] = $dateNaissance;
        $_SESSION['sexe'] = $sexe;
        header("Location: infoUser.php");
        exit;
        echo "L'utilisateur a été inscrit avec succes !";
    }
}
?>

<form action="index.php" method="POST">
    <label for="nom">Entrez votre nom complet : </label><br>
    <input type="text" name="nom" id="nom" value="<?= htmlspecialchars($nom ?? '') ?>"><br>
    <span style="color: red;"><?= $errors['nom'] ?? '' ?></span><br>

    <label for="email">Entrez votre adresse mail : </label><br>
    <input type="email" name="email" id="email" value="<?= htmlspecialchars($email ?? '') ?>"><br>
    <span style="color: red;"><?= $errors['email'] ?? '' ?></span><br>

    <label for="MDP">Entrez votre mot de passe : </label><br>
    <input type="password" name="MDP" id="MDP"><br>
    <span style="color: red;"><?= $errors['MDP'] ?? '' ?></span><br>

    <label for="confirmMDP">Confirmez votre mot de passe : </label><br>
    <input type="password" name="confirmMDP" id="confirmMDP"><br>
    <span style="color: red;"><?= $errors['confirmMDP'] ?? '' ?></span><br>

    <label for="dateNaissance">Entrez date de naissance : </label><br>
    <input type="date" name="dateNaissance" id="dateNaissance" value="<?= htmlspecialchars($dateNaissance ?? '') ?>"><br>
    <span style="color: red;"><?= $errors['dateNaissance'] ?? '' ?></span><br>

    <p>Sexe : </p>
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