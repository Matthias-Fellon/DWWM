<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Session</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="login.php">Connexion</a></li>
                <li><a href="index.php">Accueil</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1> <?= $titre ?> </h1>
        <?= $content ?>
    </main>

    <footer>
        <p>Copyright © - 2024 - Matthias Fellon - Session</p>
    </footer>
</body>
</html>