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
    $password = trim($_POST['password']);

    // Validation des champs
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Une adresse email valide est obligatoire.";
    }

    if (empty($password)) {
        $errors['password'] = "Le mot de passe est obligatoire.";
    }

    // Si pas d'erreurs
    if (empty($errors)) {
        //Verifie si l'email est dans la base de données
        $pdo = getPDOConnexion();
        $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user){
            $passwordHash = $user['password'];
            if (password_verify($password, $passwordHash)) {
                echo "Connexion réussie !";
                $_SESSION['user_id'] = $user['id']; //Stocker des infos dans la session
                header("Location: index.php");
                exit;
            }else{
                var_dump($password);
                var_dump($passwordHash);
                $errors['user'] = "Utilisateur non trouvé ou mot de passe invalide !";
            }
        } else {
            $errors['user'] = "Utilisateur non trouvé ou mot de passe invalide!";
        }
    }
}
?>

<form class="form-container" action="login.php" method="POST">
    <span><?= $errors['user'] ?? '' ?></span>

    <label for="email">Entrez votre adresse mail : </label><br>
    <input type="email" name="email" id="email" value="<?= htmlspecialchars($email ?? '') ?>"><br>
    <span><?= $errors['email'] ?? '' ?></span><br>

    <label for="password">Entrez le mot de passe de l'utilisateur : </label><br>
    <input type="password" name="password" id="password" value="<?= htmlspecialchars($password ?? '') ?>"><br>
    <span style="color: red;"><?= $errors['password'] ?? '' ?></span><br>

    <input type="submit" value="Connexion">
</form>

<?php
    $content = ob_get_clean();
    $titre = "Connexion";
    require "template.php";
?>