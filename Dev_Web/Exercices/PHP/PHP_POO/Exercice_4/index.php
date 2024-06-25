<?php
//TODO: Ajouter une page login et lors de la connexion, si admin proposer le système CRUD, sinon juste afficher les produits sans pouvoir les modifiers
//TODO: Faire les vérifications du formulaire avec le regex
//TODO: Ajouter des classes interfaces et héritages (Ex: class Magasin hérite de class Produit)
//TODO: Modifier les infos sans rafraichir la page
//TODO: Afficher les erreurs sur le produit qui en contient
//TODO: Ajouter un systeme CRUD sur une meme page
//TODO: Ajouter une base de données et s'y connecter
require_once "produit.php";
session_start();

// Si le formulaire est soumis, mettre à jour le produit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Création d'une variable qui contiendra les potentielles erreurs de formulaire
    $erreurs = [];

    // Récupération des valeurs du formulaire
    $nom = htmlspecialchars(ucfirst(trim($_POST['nom'])));
    $prix = htmlspecialchars(trim($_POST['prix']));
    $quantite = htmlspecialchars(trim($_POST['quantite']));
    $addSupp = htmlspecialchars(trim($_POST['addSupp']));

    // Validation des champs
    switch (true) {
        case empty($nom):
            $erreurs['nom'] = "Le nom est obligatoire.";

        case empty($prix):
            $erreurs['prix_1'] = "Le prix est obligatoire.";
            if ($prix<0) {
                $erreurs['prix_2'] = "Le prix est incorect.";
            }

        case empty($quantite):
            $erreurs['quantite_1'] = "La quantité est obligatoire."; // ! La fonction empty comptabilise le 0 comme vide, trouver une alternative 
            if ($quantite<0) {
                $erreurs['quantite_2'] = "Impossible d'ajouter une quantité négative.";
            }
            break;
        
        default:
            echo "ERREUR";
            break;
    }
    

    // Si pas d'erreurs
    if (empty($erreurs)) {
        //Modifier le produit
        foreach ($_SESSION['produits'] as $produit) {
            if ($produit->getNom() === $nom) {
                $produit->setPrix($prix);
                if ($addSupp === "ajouter") {
                    $produit->ajouterStock($quantite);
                } elseif ($addSupp === "enlever") {
                    if ($produit->retirerStock($quantite) < 0) {
                        echo "Impossible de retirer plus de produits qu'il n'y en a !";
                    } else {
                        $produit->retirerStock($quantite);
                    }
                } 
                echo "Produit modifié avec succès";
                break;
            }
        }
    } 
} else {
    //Ajouter une base de données et s'y connecter
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
            <span style="color: red;"><?php foreach($erreurs as $erreur){echo $erreur . "<br>";} ?></span>
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