<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Répertoire</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <h1>Vérifier mot de passe</h1>
            <label for="motDePasse">Entrez votre mot de passe : </label>
            <input type="text" name="motDePasse" id="motDePasse">
            <div class="conditionsMDP">
                <span id="LongueurMDP">Utiliser 10 caractères</span>
                <span id="MinusculeMDP">Au moins une lettre minuscule</span>
                <span id="MajusculeMDP">Au moins une lettre majucule</span>
                <span id="CaracSpeMDP">Au moins un caractère spéciale</span>
                <span id="ChiffreMDP">Au moins 1 chiffre</span>
            </div>
        </div>
    </main>
</body>
</html>
<script src="script.js"></script>