<?php
ob_start();
require_once 'Auth.class.php';
require_once 'User.class.php';
Auth::verifyAdmin();

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $message = User::deleteUser($id);
    echo $message;
}

$users = User::getAllUsers();
?>

<form class="form-container" method="POST">
    <label for="id">Utilisateur:</label>
    <select name="id" required>
        <?php foreach ($users as $user) : ?>
            <option value="<?php echo htmlspecialchars($user['id']); ?>">
                <?php echo htmlspecialchars($user['prenom'] . ' ' . $user['nom']); ?>
            </option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Supprimer">
</form>

<?php
$content = ob_get_clean();
$titre = "Supprimer un utilisateur";
require "template.php";
?>
