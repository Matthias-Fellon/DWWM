<?php
ob_start();
?>

<div class="form-container">
    <form method="POST" action="<?= URL ?>delete">
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
</div>

<?php
$content = ob_get_clean();
$titre = "Ajouter un utilisateur";
require "template.php";