<?php
ob_start();
require_once 'Auth.class.php';
require_once 'MyDbConnection.php';
require_once 'User.class.php';

Auth::verifyAdmin();

if (isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['telephone'], $_POST['password'], $_POST['role'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $message = User::createUser($nom, $prenom, $email, $telephone, $password, $role);
    echo $message;
} else {
    echo "Tous les champs du formulaire doivent être remplis.";
}
?>

<div class="form-container">
    <form method="POST">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" required><br>
        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" required><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        <label for="telephone">Téléphone:</label>
        <input type="text" name="telephone" required><br>
        <label for="password">Mot de passe:</label>
        <input type="password" name="password" required><br>
        <label for="role">Rôle:</label>
        <select name="role" required>
            <option value="admin">Admin</option>
            <option value="non-admin">Non-Admin</option>
        </select><br>
        <input type="submit" value="Ajouter">
    </form>
</div>

<?php
$content = ob_get_clean();
$titre = "Ajouter un utilisateur";
require "template.php";
?>
