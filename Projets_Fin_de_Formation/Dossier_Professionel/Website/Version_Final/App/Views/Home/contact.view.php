<?php ob_start(); ?>

<?php
$content = ob_get_clean();
$titre = "Contact";
require "../template.php";
?>