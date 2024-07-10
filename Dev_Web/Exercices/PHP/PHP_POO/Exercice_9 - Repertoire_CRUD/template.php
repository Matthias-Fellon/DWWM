<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Répertoire - Étape 1</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="Create.class.php">Ajouter</a></li>
                <li><a href="Read.class.php">Voir les utilisateurs</a></li>
                <li><a href="Update.class.php">Modifier un utilisateur</a></li>
                <li><a href="Delete.class.php">Supprimer un utilisateur</a></li>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li><a href="Logout.class.php">Déconnexion</a></li>
                <?php else: ?>
                    <li><a href="Login.class.php">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    <h1><?= $titre ?></h1>
    <?= $content ?>

    <footer>
        <p class="foot">Copyright AFCI - 2024</p>
    </footer>
</body>
</html>
