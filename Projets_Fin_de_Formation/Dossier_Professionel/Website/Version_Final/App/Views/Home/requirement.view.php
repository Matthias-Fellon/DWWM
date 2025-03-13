<?php ob_start(); ?>

<?php
$content = ob_get_clean();
$titre = "Conditions de vente";
require "../template.php";
?>