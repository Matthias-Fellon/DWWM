<?php
require_once "produit.php";
session_start();

// Si le formulaire est soumis, mettre à jour le produit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Création d'une variable qui contiendra les potentielles erreurs de formulaire
    $errors = [];

    // Récupération des valeurs du formulaire
    $nom = htmlspecialchars(ucfirst(trim($_POST['nom'])));
    $prix = htmlspecialchars(trim($_POST['prix']));
    $stock = htmlspecialchars(trim($_POST['stock']));

    // Validation des champs
    // ? Peut etre remplacer les vérifs par un switch case
    if (empty($nom)) {$errors['nom'] = "Le nom est obligatoire.";}
    if (empty($prix)) {$errors['prix_1'] = "Le prix est obligatoire.";}
    if (empty($stock)) {$errors['stock'] = "La quantité est obligatoire.";}
    
    if ($prix<0) {$errors['prix_2'] = "Le prix est incorect.";}

    //TODO: faire les cas suivants
    // si ajouter faire .....
    // si enlever faire .....

    // Si pas d'erreurs
    if (empty($errors)) {
        //Modifier le produit
        foreach ($_SESSION['produits'] as $produit) {
            if ($produit->getNom() === $nom) {
                $produit->setPrix($prix);
                $produit->setQuantite($stock);
                break;
            }
        }

        if (isset($_POST['ajax'])) {
            echo json_encode(['success' => true]);
            exit;
        } else {
            echo "Produit modifié avec succès";
        }
    } else {
        if (isset($_POST['ajax'])) {
            echo json_encode(['success' => false, 'errors' => $errors]);
            exit;
        }
    }
} else {
    $_SESSION['produits'] = [
        new Produit("Yaourt", 5.99, 6),
        new Produit("Fromage", 3.10, 12),
        new Produit("Pomme", 0.50, 37)
    ];
}
$produits = $_SESSION['produits'];
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
        <?php foreach ($produits as $produit): ?> 
            <div class="produit">
                <div class="infoProduit">
                    <p><strong>Nom : </strong> <?= $produit->getNom() ?></p>
                    <p><strong>Prix : </strong> <?= $produit->getPrix() ?></p>
                    <p><strong>Quantité : </strong> <?= $produit->getQuantite() ?></p>
                    <input class="ModifProduit" type="button" value="Modifier le produit" 
                        data-nom="<?= $produit->getNom() ?>" 
                        data-prix="<?= $produit->getPrix() ?>" 
                        data-quantite="<?= $produit->getQuantite() ?>">
                </div>
            </div> 
        <?php endforeach; ?>
    </main>

    <footer>
        <p>Copyright © - 2024 - Matthias Fellon - POO_Produits</p>
    </footer>
    
    <script src="script.js"></script>
</body>
</html>