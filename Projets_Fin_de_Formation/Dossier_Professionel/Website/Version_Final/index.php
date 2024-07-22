<?php
// Définit la constante URL
define("URL", str_replace("index.php", "", (isset($_SERVER["HTTPS"]) ? "https" : "http") . "://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']));

// Inclure les fichiers de contrôleurs nécessaires
require_once './App/Controllers/HomeController.class.php';
require_once './App/Controllers/UserController.class.php';
require_once './App/Controllers/CatController.class.php';
require_once './App/Controllers/LoginController.class.php';
require_once './App/Controllers/LogoutController.class.php';

try {
    if (empty($_GET["page"])) {
        header("Location: " . URL . "home");
        exit();
    } else {
        $url = explode("/", filter_var($_GET["page"], FILTER_SANITIZE_URL));
        switch ($url[0]) {
            case "home":
                $controller = new HomeController();
                $controller->showHome();
                break;

            case "login":
                $controller = new LoginController();
                $controller->login();
                break;

            case "logout":
                $controller = new LogoutController();
                $controller->logout();
                break;
          
            case "manageUsers":
                $controller = new UserController();
                switch($url[1]) {
                    case "createUser":
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $controller->addUser($_POST, $_FILES);
                        } else {
                            $controller->AddForm();
                        }
                        break;

                    case "readUser":
                        $controller->listUsers();
                        break;

                    case "updateUser":
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $controller->updateUser($_POST, $_FILES);
                        } else {
                            if (isset($url[2])) {
                                $controller->UpdateForm($url[2]);
                            } else {
                                throw new Exception("ID utilisateur non spécifié");
                            }
                        }
                        break;

                    case "deleteUser":
                        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                            $controller->deleteUser($_POST['id']);
                        }else{
                            $controller->deleteForm();
                        }
                        break;

                    default: 
                        throw new Exception("La page n'existe pas 1");
                }
                break;

            case "manageCats":
                switch($url[1]) {
                    case "createCat":
                        break;

                    case "readCat":
                        break;

                    case "updateCat":
                        break;

                    case "deleteCat":
                        break;
                    
                    default: 
                        throw new Exception("La page n'existe pas 2");
                }
                break;
                
            default: 
                throw new Exception("La page n'existe pas");
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}