<?php
ob_start();
require_once "auth.php";
verifAdmin();
// Variables pour stocker les messages d'erreur
$errors = [];

// Vérification du formulaire soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des valeurs du formulaire
    $nom = ucfirst(trim($_POST['nom']));
    $prenom = ucfirst(trim($_POST['prenom']));
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirmPassword']);
    $telephone = trim($_POST['telephone']);
    $role = trim($_POST['role']);

    // Validation des champs
    if (empty($nom)) {
        $errors['nom'] = "Le nom est obligatoire.";
    }

    if (empty($prenom)) {
        $errors['nom'] = "Le prenom est obligatoire.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Une adresse email valide est obligatoire.";
    }

    if (empty($password)) {
        $errors['password'] = "Le mot de passe est obligatoire.";
    }

    if (empty($confirmPassword) || $confirmPassword != $password) {
        $errors['confirmPassword'] = "Veuillez confirmer le mot de passe.";
    }

    if (empty($telephone) || strlen($telephone) != 10) {
        $errors['telephone'] = "Le numéro de téléphone doit avoir 10 chiffres.";
    }

    // Si pas d'erreurs
    if (empty($errors)) {
        //TODO Verifier si l'utilisateur existe deja

        //Crypter le mot de passe
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        //Ajouter l'utilisateur
        $pdo = getPDOConnexion();
        $stmt = $pdo->prepare('INSERT INTO users(nom, prenom, email, password, telephone) VALUES (?,?,?,?,?)');
        $stmt->execute([$nom,$prenom,$email,$password,$telephone]);
        $userId = $pdo->lastInsertId();
        $stmt = $pdo->prepare('INSERT INTO userroles(user_id, role) VALUES (?,?)');
        $stmt->execute([$userId,$role]);

        echo "Utilisateur ajouté avec succès";
    }
}
?>

<form class="form-container" action="create.php" method="POST">
    <label for="nom">Entrez le nom de l'utilisateur : </label><br>
    <input type="text" name="nom" id="nom" value="<?= htmlspecialchars($nom ?? '') ?>"><br>
    <span style="color: red;"><?= $errors['nom'] ?? '' ?></span><br>

    <label for="prenom">Entrez le prénom nom de l'utilisateur : </label><br>
    <input type="text" name="prenom" id="prenom" value="<?= htmlspecialchars($prenom ?? '') ?>"><br>
    <span style="color: red;"><?= $errors['prenom'] ?? '' ?></span><br>

    <label for="email">Entrez l'adresse mail de l'utilisateur : </label><br>
    <input type="email" name="email" id="email" value="<?= htmlspecialchars($email ?? '') ?>"><br>
    <span style="color: red;"><?= $errors['email'] ?? '' ?></span><br>

    <label for="password">Entrez le mot de passe de l'utilisateur : </label><br>
    <input type="password" name="password" id="password" value="<?= htmlspecialchars($password ?? '') ?>"><br>
    <span style="color: red;"><?= $errors['password'] ?? '' ?></span><br>

    <label for="confirmPassword">Comfirmer le mot de passe : </label><br>
    <input type="password" name="confirmPassword" id="confirmPassword" value="<?= htmlspecialchars($confirmPassword ?? '') ?>"><br>
    <span style="color: red;"><?= $errors['confirmPassword'] ?? '' ?></span><br>

    <label for="telephone">Entrez le numéro de téléphone de l'utilisateur : </label><br>
    <input type="text" name="telephone" id="telephone" value="<?= htmlspecialchars($telephone ?? '') ?>"><br>
    <span style="color: red;"><?= $errors['telephone'] ?? '' ?></span><br>
    
    <label for="role">Rôle</label>
    <select name="role">
        <option value="admin">Admin</option>
        <option value="non-admin">Non-admin</option>
    </select>

    <input type="submit" value="Ajouter">
</form>

<?php
    $content = ob_get_clean();
    $titre = "Ajouter un utilisateur";
    require "template.php";
?>