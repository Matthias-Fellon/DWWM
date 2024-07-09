<?php
require_once "Auth.class.php";
ob_start();
Auth::startSession();
?>

<div class="welcome-text">
    <h2>Bienvenue sur la page d'accueil du CRUD utilisateurs</h2>
    <p>Utilisez le menu ci-dessus pour naviguer entre les différentes actions CRUD.</p>
</div>

<?php
$content = ob_get_clean();
$titre = "Accueil";
require "template.php";
?>
