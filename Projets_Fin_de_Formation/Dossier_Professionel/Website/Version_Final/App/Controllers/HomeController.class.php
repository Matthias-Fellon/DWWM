<?php 
require_once __DIR__ . '/../Models/AuthManager.class.php';

class HomeController{
    private $authManager;

    public function __construct() {
        $this->authManager = new AuthManager();
        $this->authManager->startSession();
    }

    public function showHome() {
        require __DIR__ . "/../Views/Home/home.view.php"; 
    }

    // public function showCat() {
    //     require __DIR__ . "/../Views/Home/breeding.view.php"; 
    // }

    // public function showRequirement() {
    //     require __DIR__ . "/../Views/Home/requirement.view.php"; 
    // }

    // public function showContact() {
    //     require __DIR__ . "/../Views/Home/contact.view.php"; 
    // }

    // public function showGallery() {
    //     require __DIR__ . "/../Views/Home/gallery.view.php"; 
    // }
}