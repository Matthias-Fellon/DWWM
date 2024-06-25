<?php
ob_start();
require 'auth.php';
verifAdmin();

$pdo = getPDOConnexion();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $role = $_POST['role']; 

 
    $stmt = $pdo->prepare('UPDATE Users SET nom = ?, prenom = ?, email = ?, telephone = ? WHERE id = ?');
    $stmt->execute([$nom, $prenom, $email, $telephone, $id]);


    $stmt = $pdo->prepare('UPDATE UserRoles SET role = ? WHERE user_id = ?');
    $stmt->execute([$role, $id]);

    echo "Utilisateur mis à jour avec succès.";
}


if (isset($_GET['id'])) {
    $stmt = $pdo->prepare('SELECT Users.*, UserRoles.role FROM Users JOIN UserRoles ON Users.id = UserRoles.user_id WHERE Users.id = ?');
    $stmt->execute([$_GET['id']]);
    $user = $stmt->fetch();

    if (!$user) {
        echo "Utilisateur non trouvé.";
        exit();
    }
} else {
    echo "Aucun ID d'utilisateur fourni.";
    exit();
}
?>

    <div class="form-container">
        <?php if ($user): ?>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($user['id']); ?>">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" value="<?php echo htmlspecialchars($user['nom']); ?>" required><br>
            <label for="prenom">Prénom:</label>
            <input type="text" name="prenom" value="<?php echo htmlspecialchars($user['prenom']); ?>" required><br>
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required><br>
            <label for="telephone">Téléphone:</label>
            <input type="text" name="telephone" value="<?php echo htmlspecialchars($user['telephone']); ?>" required><br>
            <label for="role">Rôle:</label>
            <select name="role" required>
                <option value="admin" <?php if ($user['role'] == 'admin') echo 'selected'; ?>>Admin</option>
                <option value="non-admin" <?php if ($user['role'] == 'non-admin') echo 'selected'; ?>>Non-Admin</option>
            </select><br>
            <input type="submit" value="Mettre à jour">
        </form>
        <?php else: ?>
        <p>Utilisateur non trouvé.</p>
        <?php endif; ?>
    </div>

<?php
$content = ob_get_clean();
$titre = "Modifier un utilisateur";
require "template.php";
?>
