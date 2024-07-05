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
    <link rel="stylesheet" href="CSS/styles.css">
    <title>Chatterie des Fell de Chyme</title>
</head>
<body>
    <header>
        <nav>
            <img id="imgLogo" src="Images/Logo/Chatterie_des_fell_de_chyme_Black_Logo.png" alt="Logo_du_site">
            <ul>
                <li><a href="#index.php">Accueil</a></li>
                <li><a href="#femelles.php">Les Femelles</a></li>
                <li><a href="#males.php">Les Mâles</a></li>
                <li><a href="#portees.php">Les Portées</a></li>
                <li><a href="#contact.php">Contact</a></li>
            </ul>

        </nav>
    </header>

    <main>
        <h1><?= $titre ?></h1>
        <?= $content ?>
    </main>

    <footer>
        <p class="footer">Copyright Fell de Chyme - 2024</p> <!-- Avoir l'annee actuelle -->
    </footer>

    <script src="script.js"></script>
</body>
</html>
