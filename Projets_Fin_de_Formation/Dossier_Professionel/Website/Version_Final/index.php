<?php
// Définit la constante URL
define("URL", str_replace("index.php", "", (isset($_SERVER["HTTPS"]) ? "https" : "http") . "://". $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']));


// Inclure les fichiers de contrôleurs nécessaires
require_once './App/Controllers/HomeController.class.php';
require_once './App/Controllers/UserController.class.php';
require_once './App/Controllers/CatController.class.php';
require_once './App/Controllers/LoginController.class.php';
require_once './App/Controllers/LogoutController.class.php';

try {
    if ($_SERVER['REQUEST_URI'] === "/") {
        header("Location: " . URL . "home");
        exit();
    } else {
        $url = explode("/", filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL));
        $controller = new HomeController();
        switch ($url[1]) {
            case "home":
                $controller->showHome();
                break;

            case "breeding":
                $controller->showCat();
                break;

            case "saleRequirements":
                $controller->showRequirement();
                break;

            case "contact":
                $controller->showContact();
                break;

            case "gallery":
                $controller->showGallery();
                break;
               
            case "account":
                switch($url[2]) {
                    case "profile":
                        $controller = new AccountController();
                        $controller->showProfile();
                        break;
        
                    case "login":
                        $controller = new LoginController();
                        $controller->login();
                        break;
        
                    case "logout":
                        $controller = new LogoutController();
                        $controller->logout();
                        break;
                    
                    default: 
                        throw new Exception("Account : La page n'existe pas");
                }
                break;
          
            case "User":
                $controller = new UserController();
                switch($url[2]) {
                    case "create":
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $controller->addUser($_POST, $_FILES);
                        } else {
                            $controller->AddForm();
                        }
                        break;

                    case "read":
                        $controller->listUsers();
                        break;

                    case "update":
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

                    case "delete":
                        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                            $controller->deleteUser($_POST['id']);
                        }else{
                            $controller->deleteForm();
                        }
                        break;

                    default: 
                        throw new Exception("CRUD->User : La page n'existe pas 1");
                }
                break;

            case "cat":
                $controller = new CatController();
                switch($url[2]) {
                    case "create":
                        break;

                    case "read":
                        $controller->listCats();
                        break;

                    case "update":
                        break;

                    case "delete":
                        break;
                    
                    default: 
                        throw new Exception("CRUD->Cat : La page n'existe pas");
                }
                break;
                
            default: 
                throw new Exception("La page n'existe pas");
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}