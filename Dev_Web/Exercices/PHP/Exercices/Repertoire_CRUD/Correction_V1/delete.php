<?php
ob_start();
require 'auth.php';
verifAdmin();

$pdo = getPDOConnexion();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $stmt = $pdo->prepare('DELETE FROM Users WHERE id = ?');
    $stmt->execute([$id]);

    echo "Utilisateur supprimé avec succès.";
}

$users = $pdo->query('SELECT id, nom, prenom FROM Users')->fetchAll();
?>

<form method="POST">
    <label for="id">Utilisateur:</label>
    <select name="id" required>
        <?php foreach ($users as $user): ?>
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
