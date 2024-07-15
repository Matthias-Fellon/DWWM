<?php
require_once './Models/UserManager.class.php';

class UserController{
    private $userManager;

    public function __construct() {
        $this->userManager = new UserManager();
    }

    public function listUser() {
        $users = $this->userManager->getAllUsers();
        require './views/read.view.php';
    }
    

    public function updateForm($id) {
        $utilisateur = $this->userManager->getUserById($id);
        require './views/update.view.php';
    }

    public function updateUser($data, $files) {
        $id = $data['id'];
        $nom = $data['nom'];
        $prenom = $data['prenom'];
        $email = $data['email'];
        $telephone = $data['telephone'];
        $role = $data['role'];
        $nomImage = $data['nomImage'];

        //Gestion du téléchargement de l'image
        if(isset($files['image']) && $files['image']['error'] == UPLOAD_ERR_OK) {
            $nomImage = baseName($files['image']['name']);
            move_uploaded_file($files['image']['tmp_name'], "./public/image/$nomImage");
        }
        $message = $this->userManager->updateUser($id, $nom, $prenom, $email, $telephone, $role, $nomImage);
        $this->listUser();
    }
}