<?php ob_start(); ?>

<?php
$content = ob_get_clean();
$titre = "Gallerie";
require "../template.php";
?>