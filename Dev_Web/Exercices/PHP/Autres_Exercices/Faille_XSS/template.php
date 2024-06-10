<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Faille XSS</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="faille_XSS.php">Faille XSS</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1> <?= $titre ?> </h1>
        <?= $content ?>
    </main>

    <footer>
        <p>Copyright © - 2024 - Matthias Fellon - Faille XSS</p>
    </footer>
</body>
</html>