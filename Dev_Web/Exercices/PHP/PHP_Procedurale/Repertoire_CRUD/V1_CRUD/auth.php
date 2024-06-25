<?php
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
    require_once "dbConnect.php";

    function estAdmin($userId){
        $pdo = getPDOConnexion();
        //Préparation de la requête sql
        $stmt = $pdo->prepare('SELECT role FROM userRoles WHERE user_id = ?');
        //Execution de la requête
        $stmt->execute([$userId]);
        //Récupération du résultat
        $userRole = $stmt->fetch();

        //Vérification du rôle
        return $userRole && $userRole['role'] === 'admin';
    }

    function verifAdmin(){
        if(!isset($_SESSION['user_id'])){
            echo "Session utilisateur non définie";
        }else{
            $userId = $_SESSION['user_id'];
            if(!estAdmin($userId)) {
                echo "<p class=\"droitsAdmin\">L'utilisateur avec l'ID $userId n'est pas un administrateur</p>";
            }
        }
    }
?>