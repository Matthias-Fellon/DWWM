<?php
require_once __DIR__ . '../../Models/AuthManager.class.php';

class LogoutController {
    private $authManager;

    public function __construct() {
        $this->authManager = new AuthManager();
    }

    public function logout() {
        $this->authManager->logout();
        header('Location: ' . URL . 'login');
        exit();
    }
}
