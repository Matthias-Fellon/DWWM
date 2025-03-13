<?php
// Définit la constante URL
define("URL", str_replace("index.php", "", (isset($_SERVER["HTTPS"]) ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']));

// Inclure les fichiers de contrôleurs nécessaires
require_once './App/Controllers/HomeController.class.php';


try {
    if ($_SERVER['REQUEST_URI'] == "/") {
        header("Location: " . URL . "home");
        exit();
    } else {
        $url = explode("/", filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL));
        switch ($url[1]) {
            case "home":
                $controller = new HomeController();
                $controller->index();
                break;

            default:
                throw new Exception("La page n'existe pas");
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
