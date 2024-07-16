<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

error_log('Session user_id: ' . (isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 'Non défini'));
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL ?>public/css/style.css">
    <title>Répertoire - POO - MVC</title>
</head>
<body>
    <header>
        <img src="<?= URL ?>public/images/logo.png" alt="Logo" class="nav-logo">
        <nav>
            <ul>
                <li><a href="<?= URL ?>accueil">Accueil</a></li>
                <li><a href="<?= URL ?>ajouter">Ajouter</a></li>
                <li><a href="<?= URL ?>read">Voir les utilisateurs</a></li>
                <li><a href="<?= URL ?>update/<?php if(isset($user['id'])): ?><?=$user['id']?><?php endif; ?>">Modifier</a></li>
                <li><a href="<?= URL ?>delete">Supprimer</a></li>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li><a href="<?= URL ?>logout">Déconnexion</a></li>
                <?php else : ?>
                    <li><a href="<?= URL ?>login">Login</a></li> 
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
