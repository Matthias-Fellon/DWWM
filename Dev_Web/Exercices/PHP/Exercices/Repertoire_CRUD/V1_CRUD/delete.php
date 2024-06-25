<?php
    ob_start();
    require_once "auth.php";

    if($_SERVER["REQUEST_METHOD"] == "GET") {
        $id = $_GET['id'];

        $pdo = getPDOConnexion();
        $stmt = $pdo->prepare('DELETE FROM users WHERE id=?');
        $stmt->execute([$id]);

        $stmt = $pdo->prepare('DELETE FROM userroles WHERE user_id=?');
        $stmt->execute([$id]);

        echo "Utilisateur supprimé avec succès";
        header("Location: read.php");
    }
    
    $content = ob_get_clean();
    $titre = "Supprimer un utilisateur";
    require "template.php";
?>