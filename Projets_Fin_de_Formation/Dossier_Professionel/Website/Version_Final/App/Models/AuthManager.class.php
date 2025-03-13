<?php
require_once __DIR__ . "/../../Configs/MyDbConnection.class.php";
class AuthManager {
    private $pdo;

    public function __construct() {
        $this->pdo = MyDbConnection::getInstance();
    }

    public function startSession() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function authenticate($email, $password) {
        $stmt = $this->pdo->prepare('SELECT utilisateur.ID_Utilisateur, utilisateur.Mot_De_Passe FROM utilisateur  
                                    WHERE utilisateur.Email = ?');
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        // if ($user && password_verify($password, $user['Mot_De_Passe'])) {
        if ($user && ($password == $user['Mot_De_Passe'])) {
            return $user['ID_Utilisateur'];
        } else {
            return false;
        }
    }

    public function estAdmin($userId) {
        $stmt = $this->pdo->prepare('SELECT Role FROM utilisateur WHERE utilisateur.ID_Utilisateur = ?');
        $stmt->execute([$userId]);
        $userRole = $stmt->fetch();
        return $userRole && $userRole['Role'] === 'Admin';
    }

    public function verifierAdmin() {
        $this->startSession();
        if (!isset($_SESSION['ID_Utilisateur'])) {
            echo "Session utilisateur non définie.";
            exit();
        } else {
            $userId = $_SESSION['ID_Utilisateur'];
            if (!$this->estAdmin($userId)) {
                echo "L'utilisateur avec l'ID $userId n'est pas un administrateur.";
                exit();
            } else {
                return true;
            }
        }
        $this->startSession();
    if (!isset($_SESSION['ID_Utilisateur'])) {
        return false; // L'utilisateur n'est pas connecté
    }

    $userId = $_SESSION['ID_Utilisateur'];
    return $this->estAdmin($userId);
    }

    public function logout() {
        $this->startSession();
        session_unset();
        session_destroy();
    }
}
