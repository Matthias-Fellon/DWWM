<?php ob_start(); ?>

<h1>Bonjour !</h1>

<?php
    $content = ob_get_clean();
    require "template.php";
?>