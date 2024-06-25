<?php
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
    ob_start();
    require_once "auth.php";
    if(!isset($_SESSION['user_id'])){
        header('Location: login.php');
        exit;
    }
    verifAdmin();
?>

<?php
    $content = ob_get_clean();
    $titre = "Accueil";
    require "template.php";
?>