<?php 
    ob_start();
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
    require_once "dbConnect.php";
?>

<?php
// Variables pour stocker les messages d'erreur
$errors = [];

// Vérification du formulaire soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des valeurs du formulaire
    $email = trim($_POST['email']);

    // Validation des champs
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Une adresse email valide est obligatoire.";
    }

    // Si pas d'erreurs
    if (empty($errors)) {
        //Verifie si l'email est dans la base de données
        $pdo = getPDOConnexion();
        $stmt = $pdo->prepare('SELECT id FROM users WHERE email = ?');
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if($user){
            $_SESSION['user_id'] = $user['id']; //Stocker des infos dans la session
            header("Location: index.php");
            exit;
        } else {
            $errors['user'] = "Utilisateur non trouvé !";
        }
    }
}
?>

<form class="form-container" action="login.php" method="POST">
    <span><?= $errors['user'] ?? '' ?></span>
    <label for="email">Entrez votre adresse mail : </label><br>
    <input type="email" name="email" id="email" value="<?= htmlspecialchars($email ?? '') ?>"><br>
    <span><?= $errors['email'] ?? '' ?></span><br>

    <input type="submit" value="Connexion">
</form>

<?php
    $content = ob_get_clean();
    $titre = "Connexion";
    require "template.php";
?>