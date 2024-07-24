<?php
require_once __DIR__ . '/../../Configs/MyDbConnection.class.php';
require_once __DIR__ . '/PersonneManger.class.php';
// TODO Faire les modifs des requetes car les champs actuels sont different des champs de la BDD
// TODO Pour les fonctions modifiants des donnees contenu dans la BDD, Effectuer des transaction (Commit et Rollback)

class UserManager extends PersonneManager{
    private $pdo;

    public function __construct() {
        $this->pdo = MyDbConnection::getInstance();
    }

    public function getAllUsers() {
        $sql = 'SELECT ID_Personne, Mot_De_Passe, Nom, Prenom, Email, Telephone, Role, Image_Profil
                FROM utilisateur
                LEFT JOIN privilege ON utilisateur.ID_Personne = privilege.ID_Privilege';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserById($id) {
        $sql = 'SELECT ID_Personne, Nom, Prenom, Email, Telephone, Role, Image_Profil
                FROM utilisateur
                LEFT JOIN privilege ON utilisateur.ID_Personne = privilege.ID_Privilege
                WHERE utilisateur.ID_Personne = ?';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateUser($id, $nom, $prenom, $email, $telephone, $role, $nomImage) {
        try {
            $stmt = $this->pdo->prepare('UPDATE utilisateur SET Nom = ?, Prenom = ?, Email = ?, Telephone = ?, Image_Profil = ? WHERE ID_Personne = ?');
            $stmt->execute([$nom, $prenom, $email, $telephone, $nomImage, $id]);

            $stmt = $this->pdo->prepare('UPDATE privilege SET Role = ? WHERE ID_Privilege = ?');
            $stmt->execute([$role, $id]);

            return "Utilisateur mis à jour avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public function createUser($nom, $prenom, $email, $telephone, $role, $nomImage, $pwd) {
        try {
            $stmt = $this->pdo->prepare('INSERT INTO utilisateur (Nom, Prenom, Email, Telephone, Image_Profil, Mot_De_Passe) VALUES (?, ?, ?, ?, ?, ?)');
            $stmt->execute([$nom, $prenom, $email, $telephone, $nomImage, password_hash($pwd, PASSWORD_DEFAULT)]);
            
            $userId = $this->pdo->lastInsertId();

            $stmt = $this->pdo->prepare('INSERT INTO privilege (ID_Privilege, Role) VALUES (?, ?)');
            $stmt->execute([$userId, $role]);

            return "Utilisateur ajouté avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public function deleteUser($id){
        try{
            //On supprime d'abord le rôle associé à l'utilisateur
            $stmt = $this->pdo->prepare('DELETE FROM utilisateur WHERE ID_Personne = ?');
            $stmt->execute([$id]);

            //On supprime l'utilisateur
            $stmt = $this->pdo->prepare('DELETE FROM privilege WHERE ID_Privilege = ?');
            $stmt->execute([$id]);
            return "Utilisateur supprimé avec succès.";
        }catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }
}
