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
        echo var_dump($utilisateur);
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
            $tmp_name = $files['image']['tmp_name'];
            $name = basename($files['image']['name']);
            move_uploaded_file($tmp_name, "./public/images/$name");
            $nomImage = $name;
        }
        $message = $this->userManager->updateUser($id, $nom, $prenom, $email, $telephone, $role, $nomImage);
        $this->listUser();
    }
}