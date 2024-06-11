<?php
    ob_start();


    session_start();
    unset($_SESSION['username']);
    session_destroy();


    header("Location: login.php");
    exit;

?>

<?php
    $content = ob_get_clean();
    $titre = "Vous n'étes plus connecté";
    require "template.php";
?>