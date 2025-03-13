<?php ob_start(); ?>

<?php
$content = ob_get_clean();
$titre = "Élevage";
require "../template.php";
?>