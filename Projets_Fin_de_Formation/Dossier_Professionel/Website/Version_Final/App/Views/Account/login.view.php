<?php ob_start(); ?>

<div class="login-container">
    <?php if (isset($error)): ?>
        <p class="error"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>
    <form method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <label for="password">Mot de passe:</label>
        <input type="password" name="password" id="password" required>
        <input type="submit" value="Login">
    </form>
</div>

<?php
$content = ob_get_clean();
$titre = "Identification";
require __DIR__ . "/../template.php";
?>
