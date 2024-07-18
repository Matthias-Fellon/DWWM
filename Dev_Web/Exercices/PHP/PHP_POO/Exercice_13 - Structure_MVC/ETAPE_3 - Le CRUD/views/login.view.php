<?php ob_start(); ?>

<div class="login-container">
    <?php if (isset($error)): ?>
        <p class="error"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>
    <form method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <label for="password">Mot de passe:</label>
        <input type="password" name="password" required>
        <input type="submit" value="Login">
    </form>
</div>

<?php
$content = ob_get_clean();
$titre = "Identification Espace Administrateur";
require "template.php";
?>
