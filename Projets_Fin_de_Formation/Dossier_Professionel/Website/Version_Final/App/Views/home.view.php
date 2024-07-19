<?php ob_start();?>

<div class="welcome-text">
    <h2>Bienvenue sur la page d'accueil du CRUD utilisateurs</h2>
    <p>Utilisez le menu ci-dessus pour naviguer entre les différentes actions CRUD.</p>
    <!-- <img src="<?= URL ?>Public/images/Persan_Chat_1.jpeg" alt="Image_Chat" class="home-image"> -->
</div>

<?php
$content = ob_get_clean();
$titre = "Accueil";
require "template.php";
?>
