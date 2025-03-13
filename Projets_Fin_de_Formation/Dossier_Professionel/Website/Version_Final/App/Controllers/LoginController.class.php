<?php
require_once __DIR__ . '/../Models/AuthManager.class.php';
require_once __DIR__ . '/../../Configs/MyDbConnection.class.php';

class LoginController {
    private $authManager;

    public function __construct() {
        $this->authManager = new AuthManager();
        $this->authManager->startSession();
    }

    public function login() {
        $error = null;

        if (isset($_POST['email'], $_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userId = $this->authManager->authenticate($email, $password);

            if ($userId) {
                $_SESSION['ID_Utilisateur'] = $userId;
                header('Location: home');
                exit();
            } else {
                $error = "Email ou mot de passe incorrect.";
            }
        }

        require __DIR__ . '/../Views/Account/login.view.php';
    }
}
