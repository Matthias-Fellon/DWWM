<?php
require_once './Models/MyDbConnection.php';

class UserManager{
    private $pdo;

    public function __construct() {   
        $this->pdo = MyDbConnection::getInstance();
    }

    // la page read
    public function getAllUsers() {
        $sql = 'SELECT users.id, users.nom, users.prenom, users.email, users.telephone, users.nomImage, userroles.role
                FROM users
                LEFT JOIN userroles ON users.id = userroles.user_id';

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // La page update
    public function updateUser($id, $nom, $prenom, $email, $telephone, $role, $nomImage) {
        try {
            $sql = 'UPDATE Users 
                    SET nom = ?, prenom = ?, email = ?, telephone = ? 
                    WHERE id = ?';

            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$nom, $prenom, $email, $telephone, $id]);

            $sql = 'UPDATE UserRoles
                    SET role = ? 
                    WHERE user_id = ?';

            $stmt = $this->pdo->prepare('UPDATE UserRoles SET role = ? WHERE user_id = ?');
            $stmt->execute([$role, $id]);

            return "Utilisateur mis à jour avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public function getUserById($id) {
        $sql = 'SELECT users.id, users.nom, users.prenom, users.email, users.telephone, users.nomImage, userroles.role
                FROM users
                LEFT JOIN userroles ON users.id = userroles.user_id
                WHERE users.id = ?';

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}