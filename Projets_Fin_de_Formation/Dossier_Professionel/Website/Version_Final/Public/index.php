<?php
ob_start();
?>

<div class="welcome-text">
    <h2>Bienvenue sur la page d'accueil du site</h2>
    <p>Utilisez le menu ci-dessus pour naviguer entre les différentes actions.</p>
</div>

<?php
$content = ob_get_clean();
$titre = "Accueil";
require_once $_SERVER['DOCUMENT_ROOT'] . '/App/Views/template.php';
?>