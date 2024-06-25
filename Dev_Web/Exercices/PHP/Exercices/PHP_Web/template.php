<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Formulaire</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="/Formulaire/formulaire.php">Formulaire</a></li>
                <li><a href="/Cercle/cercle.php">Calcul sur le cercle</a></li>
                <li><a href="/Calculatrice/calculatrice.php">Calculatrice</a></li>
                <li><a href="/Input_Type/radio.php">Input radio</a></li>
                <li><a href="/Input_Type/checkbox.php">Input checkbox</a></li>
                <li><a href="/Input_Type/securite.php">Sécurité</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1> <?= $titre ?> </h1>
        <?= $content ?>
    </main>

    <footer>
        <p>Copyright © - 2024 - Matthias Fellon - Formulaire</p>
    </footer>
</body>
</html>