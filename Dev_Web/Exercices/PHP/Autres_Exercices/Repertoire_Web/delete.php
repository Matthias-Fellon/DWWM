<?php
    ob_start();



    
    $content = ob_get_clean();
    $titre = "Connexion";
    require "template.php";
?>