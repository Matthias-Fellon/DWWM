<?php 
require_once __DIR__ . '/../Models/AuthManager.class.php';

class HomeController{
    private $authManager;

    public function __construct() {
        $this->authManager = new AuthManager();
        $this->authManager->startSession();
    }

    public function showHome() {
        require __DIR__ . "/../Views/home.view.php"; 
    }
}