<?php
// Inclure les fichiers de contrôleurs nécessaires
require './Controllers/UserController.class.php';
require './Controllers/LoginController.class.php';
require './Controllers/LogoutController.class.php';

// Définit la constante URL
define("URL", str_replace("index.php", "", (isset($_SERVER["HTTPS"]) ? "https" : "http") . "://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']));

try {
    if (empty($_GET["page"])) {
        header("Location: " . URL . "accueil");
        exit();
    } else {
        $url = explode("/", filter_var($_GET["page"], FILTER_SANITIZE_URL));

        switch ($url[0]) {
            case "accueil": 
                require "views/accueil.view.php"; 
                break;

            case "login":
                $controller = new LoginController();
                $controller->login();
                break;

            case "logout":
                $controller = new LogoutController();
                $controller->logout();
                break;

            case "read":
                $controller = new UserController();
                $controller->listUser();
                break;

            case "create":
                $controller = new UserController();
                break;

            case "update":
                $controller = new UserController();
                if($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $controller->updateUser($_POST, $_FILES);
                } else {
                    if(isset($url[1])) {
                        $controller->updateForm($url[1]);
                    } else {
                        throw new Exception("ID utilisateur non spécifié");
                    }
                }
                break;

            case "delete":
                $controller = new UserController();
                break;
    
            default: 
                throw new Exception("La page n'existe pas");
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
