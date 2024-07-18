<?php
require_once "MyDbConnection.php";
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
        $stmt = $this->pdo->prepare('SELECT id, pwd FROM users WHERE email = ?');
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['pwd'])) {
            return $user['id'];
        } else {
            return false;
        }
    }

    public function estAdmin($userId) {
        $stmt = $this->pdo->prepare('SELECT role FROM UserRoles WHERE user_id = ?');
        $stmt->execute([$userId]);
        $userRole = $stmt->fetch();
        return $userRole && $userRole['role'] === 'admin';
    }

    public function verifierAdmin() {
        $this->startSession();
        if (!isset($_SESSION['user_id'])) {
            echo "Session utilisateur non définie.";
            exit();
        } else {
            $userId = $_SESSION['user_id'];
            if (!$this->estAdmin($userId)) {
                echo "L'utilisateur avec l'ID $userId n'est pas un administrateur.";
                exit();
            }
        }
    }

    public function logout() {
        $this->startSession();
        session_unset();
        session_destroy();
    }
}
