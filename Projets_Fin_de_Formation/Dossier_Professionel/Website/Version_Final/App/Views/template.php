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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
        crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="<?= URL ?>Public/StyleSheets/styles.css">
    <title>Chatterie des Fell de Chyme</title>
</head>
<body>
    <header>
        <nav class="menu">
            <div class="top-bar">
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <ul>
                <li class="item" id="accueil">
                    <a href="#accueil" class="bouton">Accueil</a>
                    <i class="fa-solid fa-chevron-right"></i>
                    <div class="smenu">
                        <a href="#">Présentation de l'Elevage</a>
                        <a href="#">À Propos de Moi</a>
                        <a href="#">Contact</a>
                        <a href="#">Actualités</a>
                        <a href="#">Galerie Photos/Vidéos</a>
                    </div>
                </li>
                <li class="item" id="elevage">
                    <a href="#elevage" class="bouton">Elevage</a>
                    <i class="fa-solid fa-chevron-right"></i>
                    <div class="smenu">
                        <a href="#">Les Mâles</a>
                        <a href="#">Les Femelles</a>
                        <a href="#">Les Chatons</a>
                        <a href="#">Les Retraités</a>
                        <a href="#">En Mémoire</a>
                    </div>
                </li>
                <li class="item" id="contact">
                    <a href="#contact" class="bouton">Contact</a>
                </li>
                <li class="item" id="conditionsVente">
                    <a href="#conditionsVente" class="bouton">Conditions de Vente</a>
                    <i class="fa-solid fa-chevron-right"></i>
                    <div class="smenu">
                        <a href="#">Coût Prévisionnel</a>
                        <a href="#">Mentions Légales</a>
                        <a href="#">Conditions D'Adoption</a>
                        <a href="#">Disponibilité - Option - Réservation</a>
                    </div>
                </li>
                <li class="item" id="galerie">
                    <a href="#galerie" class="bouton">Galerie</a>
                    <i class="fa-solid fa-chevron-right"></i>
                    <div class="smenu">
                        <a href="#">Photos</a>
                        <a href="#">Videos</a>
                    </div>
                </li>
                <li class="item" id="connexion/deconnexion">
                    <?php if(!isset($_SERVER['user_id'])): ?>
                    <a href="<?= URL ?>login" class="bouton">Connexion</a>
                    <?php else: ?>
                    <a href="<?= URL ?>logout" class="bouton">Deconnexion</a>
                    <?php endif; ?>
                </li>
                <li class="item" id="CRUD">
                    <a href="#CRUD" class="bouton">CRUD</a>
                    <i class="fa-solid fa-chevron-right"></i>
                    <div class="smenu">
                        <a href="<?= URL ?>manageUsers/readUser">Utilisateurs</a>
                        <a href="<?= URL ?>manageCats">Chats</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- <img id="imgLogo" src="<?= URL ?>Public/Images/Logo/Chatterie_des_fell_de_chyme_Black_Logo.png" alt="Logo_du_site"> -->
    </header>

    <main>
        <h1><?= $titre ?></h1>
        <?= $content ?>
    </main>

    <footer>
        <p class="footer">Copyright Fell de Chyme - 2024</p> <!-- Avoir l'annee actuelle -->
    </footer>

    <script src="<?= URL ?>Public/JavaScript/script.js"></script>
</body>
</html>
