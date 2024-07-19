<?php
require_once __DIR__ . '/../Models/UserManager.class.php';

class UserController {
    private $userManager;

    public function __construct() {
        $this->userManager = new UserManager();
    }

    public function listUsers() {
        $users = $this->userManager->getAllUsers();
        require  __DIR__ . '/../Views/User/read.view.php';
    }

    public function UpdateForm($id) {
        $utilisateur = $this->userManager->getUserById($id);
        require  __DIR__ . '../Views/User/update.view.php';
    }

    public function updateUser($data, $files) {
        $id = $data['id'];
        $nom = $data['nom'];
        $prenom = $data['prenom'];
        $email = $data['email'];
        $telephone = $data['telephone'];
        $role = $data['role'];
        $nomImage = $data['currentImage'];

        // Gestion de l'upload de l'image
        if (isset($files['image']) && $files['image']['error'] === UPLOAD_ERR_OK) {
            $tmp_name = $files['image']['tmp_name'];
            $rename =  $nom . '-' . $prenom . '.' . pathinfo($files['image']['name'])['extension'];
            $name = basename($rename);
            move_uploaded_file($tmp_name, "./Public/Images/$name");
            $nomImage = $name;
        }

        $message = $this->userManager->updateUser($id, $nom, $prenom, $email, $telephone, $role, $nomImage);
        $this->listUsers(); 
    }

    public function addUser($data, $files) {
        $nom = $data['nom'];
        $prenom = $data['prenom'];
        $email = $data['email'];
        $telephone = $data['telephone'];
        $role = $data['role'];
        $pwd = $data['pwd'];
        $nomImage = 'default.png'; // Image par défaut
        
        // Vérification de l'existence et de l'absence d'erreur dans le fichier uploadé
        // Gestion de l'upload de l'image
        if (isset($files['image']) && $files['image']['error'] === UPLOAD_ERR_OK) {
            $tmp_name = $files['image']['tmp_name'];
            $name = basename($files['image']['name']);
            move_uploaded_file($tmp_name, "./Public/Images/$name");
            $nomImage = $name;
        }

        $message = $this->userManager->createUser($nom, $prenom, $email, $telephone, $role, $nomImage, $pwd);
        $this->listUsers(); 
    }

    public function addForm(){
        require './Views/User/create.view.php';
    }

    public function deleteForm(){
        $users =  $this->userManager->getAllUsers();
        require './Views/User/delete.view.php';
    }

    public function deleteUser($id){
        $message = $this->userManager->deleteUser($id);
        $this->listUsers();
    }
}
