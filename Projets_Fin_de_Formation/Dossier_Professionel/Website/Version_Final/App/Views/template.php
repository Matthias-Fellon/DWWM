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
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../Public/StyleSheets/styles.css">
    <title>Chatterie des Fell de Chyme</title>
</head>

<body>
    <nav class="navbar" id="myNavbar">
        <div class="menu">
            <a href="home" class="active">Accueil</a>

            <a href="elevage">Elevage</a>

            <a href="conditionsVente" class="dropbtn">Conditions de Vente
                <i class="fa-solid fa-chevron-down"></i>
            </a>

            <a href="galerie">Galerie</a>

            <a href="contact">Contact</a>
        </div>

        <div class="utilisateur" id="utilisateur">
            <div class="smenu" id="connexion/deconnexion">
                <?php if (!isset($_SESSION['ID_Utilisateur'])): ?>
                    <a href="account/login" class="bouton">Connexion</a>
                <?php else: ?>
                    <a href="account/logout" class="bouton">Deconnexion</a>
                <?php endif; ?>
            </div>

            <?php if (isset($_SESSION['ID_Utilisateur']) && $this->authManager->estAdmin($_SESSION['ID_Utilisateur'])): ?>
                <div class="smenu" id="profil">
                    <a href="CRUD" class="bouton">CRUD</a>
                    <i class="fa-solid fa-chevron-down"></i>
                    <div class="smenu">
                        <a href="user/read">Utilisateurs</a>
                        <a href="cats/read">Chats</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <button style="font-size:15px;" class="openbtn">&#9776;</button>
    </nav>


    <main>
        <h1><?= $titre ?></h1>
        <?= $content ?>
    </main>

    <footer>
        <p class="footer">Copyright Fell de Chyme - 2024</p>
    </footer>

    <script src="Public/JavaScript/script.js"></script>
</body>

</html>