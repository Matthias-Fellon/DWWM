<?php
// Définit la constante URL
define("URL", str_replace("index.php", "", (isset($_SERVER["HTTPS"]) ? "https" : "http") . "://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']));

// Inclure les fichiers de contrôleurs nécessaires
require_once './Controllers/UserController.class.php';
require_once './Controllers/LoginController.class.php';
require_once './Controllers/LogoutController.class.php';

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
                $controller->listUsers();
                break;
            case "update":
                $controller = new UserController();
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $controller->updateUser($_POST, $_FILES);
                } else {
                    if (isset($url[1])) {
                        $controller->UpdateForm($url[1]);
                    } else {
                        throw new Exception("ID utilisateur non spécifié");
                    }
                }
                break;
            case "ajouter":
                $controller = new UserController();
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $controller->addUser($_POST, $_FILES);
                } else {
                    $controller->AddForm();
                }
                break;
            
            case "delete":
                $controller = new UserController();
                if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                    $controller->deleteUser($_POST['id']);
                }else{
                    $controller->deleteForm();
                }
                break;
            default: 
                throw new Exception("La page n'existe pas");
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
