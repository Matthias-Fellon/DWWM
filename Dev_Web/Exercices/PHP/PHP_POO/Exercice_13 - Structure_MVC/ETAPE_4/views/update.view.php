<?php
ob_start();
?>

<div class="form-container">
    <?php if ($utilisateur) : ?>
        <form method="POST" enctype="multipart/form-data" action="<?= URL ?>update">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($utilisateur['id']); ?>">
            <input type="hidden" name="currentImage" value="<?php echo htmlspecialchars($utilisateur['nomImage']); ?>">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" value="<?php echo htmlspecialchars($utilisateur['nom']); ?>" required><br>
            <label for="prenom">Prénom:</label>
            <input type="text" name="prenom" value="<?php echo htmlspecialchars($utilisateur['prenom']); ?>" required><br>
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($utilisateur['email']); ?>" required><br>
            <label for="telephone">Téléphone:</label>
            <input type="text" name="telephone" value="<?php echo htmlspecialchars($utilisateur['telephone']); ?>" required><br>
            <label for="role">Rôle:</label>
            <select name="role" required>
                <option value="admin" <?php if ($utilisateur['role'] == 'admin') echo 'selected'; ?>>Admin</option>
                <option value="non-admin" <?php if ($utilisateur['role'] == 'non-admin') echo 'selected'; ?>>Non-Admin</option>
            </select><br>
            <label for="image">Image:</label>
            <input type="file" name="image"><br>
            <input type="submit" value="Mettre à jour">
        </form>
    <?php else : ?>
        <p>Utilisateur non trouvé.</p>
    <?php endif; ?>
</div>

<?php
$content = ob_get_clean();
$titre = "Modifier un utilisateur";
require "template.php";
