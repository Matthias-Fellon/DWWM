<?php
require_once "produit.php";

$produits =[
    "Yaourt" => new Produit("Yaourt", 5.99, 6),
    "Fromage" => new Produit("Fromage", 3.10, 12),
    "Pomme" => new Produit("Pomme", 0.50, 37)
];

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des valeurs du formulaire
    $nom = ucfirst(trim($_POST['nom']));
    $prix = trim($_POST['prix']);
    $stock = trim($_POST['stock']);

    // Validation des champs
    if (empty($nom)) {
        $errors['nom'] = "Le nom est obligatoire.";
    }

    if (empty($prix)) {
        $errors['prix_1'] = "Le prix est obligatoire.";
        if ($prix<0) {
            $errors['prix_2'] = "Le prix est incorect.";
        } 
    }

    if (empty($stock)) {
        $errors['stock'] = "La quantité est obligatoire.";
        // si ajouter faire .....
        // si enlever faire .....
    }
    

    // Si pas d'erreurs
    if (empty($errors)) {
        //Modifier le produit
        echo "Utilisateur ajouté avec succès";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>POO - Produits</title>
</head>
<body>
    <header>
        <nav>
            <a href="index.php">Accueil</a>
        </nav>
    </header>

    <main>
        <div class="produits">
            <?php foreach ($produits as $produit): ?> 
                <div class="container">
                    <p><strong>Nom : </strong> <?= $produit->getNom() ?></p>
                    <p><strong>Prix : </strong> <?= $produit->getPrix() ?> </p>
                    <p><strong>Quantitées : </strong> <?= $produit->getQuantite() ?></p>
                    <input id="ModifProduit" type="button" value="Modifier Produit">
                </div>
            <?php endforeach; ?>
        </div>

        <form class="container" action="index.php" method="POST">
            <label for="nom">Entrez le nom du produit : </label><br>
            <input type="text" name="nom" id="nom" value="<?= htmlspecialchars($nom ?? '') ?>"><br>
            <span style="color: red;"><?= $errors['nom'] ?? '' ?></span><br>

            <label for="nom">Entrez le nouveau prix : </label><br>
            <input type="text" name="nom" id="nom" value="<?= htmlspecialchars($prix ?? '') ?>"><br>
            <span style="color: red;"><?= $errors['prix_1'] ?? '' ?></span>
            <span style="color: red;"><?= $errors['prix_2'] ?? '' ?></span><br>

            <label for="stock">Stock</label>
            <div class="addSuppStock">
                <select name="stock">
                    <option value="ajouter">Ajouter</option>
                    <option value="enlever">Enlever</option>
                </select>
                <input type="number" name="quantite" id="quantite" value="<?= htmlspecialchars($quantite ?? '') ?>">
            </div>

            <input type="submit" value="Ajouter">
        </form>
    </main>

    <footer>
        <p>Copyright © - 2024 - Matthias Fellon - POO_Produits</p>
    </footer>
    
</body>
</html>

<script src="script.js"></script>