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
        $stmt = $this->pdo->prepare('SELECT ID_Personne, Mot_De_Passe FROM utilisateur WHERE Email = ?');
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['Mot_De_Passe'])) {
            return $user['ID_Personne'];
        } else {
            return false;
        }
    }

    public function estAdmin($userId) {
        $stmt = $this->pdo->prepare('SELECT Role FROM privilege WHERE ID_Privilege = ?');
        $stmt->execute([$userId]);
        $userRole = $stmt->fetch();
        return $userRole && $userRole['Role'] === 'Administrateur';
    }

    public function verifierAdmin() {
        $this->startSession();
        if (!isset($_SESSION['ID_Personne'])) {
            echo "Session utilisateur non définie.";
            exit();
        } else {
            $userId = $_SESSION['ID_Personne'];
            if (!$this->estAdmin($userId)) {
                echo "L'utilisateur avec l'ID $userId n'est pas un administrateur.";
                exit();
            } else {
                return true;
            }
        }
    }

    public function logout() {
        $this->startSession();
        session_unset();
        session_destroy();
    }
}
