<?php

abstract class DbConnect {
    private static $instance = null;
    protected $pdo;

    protected function __construct() {
        // opérateur de fusion null ?:
        $host = getenv('DB_HOST') ?: 'localhost';
        $port = getenv('DB_PORT') ?: '3308';
        $db = getenv('DB_NAME') ?: 'rep-v3';
        $user = getenv('DB_USER') ?: 'root';
        $pass = getenv('DB_PASS') ?: '';
        $charset = 'utf8mb4';
        
        // Utilisation d'un fichier de configuration SSL/TLS si nécessaire
        $sslCa = getenv('DB_SSL_CA') ?: null;
        $sslCert = getenv('DB_SSL_CERT') ?: null;
        $sslKey = getenv('DB_SSL_KEY') ?: null;

        $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        // Ajouter des options SSL si configurées
        if ($sslCa && $sslCert && $sslKey) {
            $options[PDO::MYSQL_ATTR_SSL_CA] = $sslCa;
            $options[PDO::MYSQL_ATTR_SSL_CERT] = $sslCert;
            $options[PDO::MYSQL_ATTR_SSL_KEY] = $sslKey;
        }

        try {
            $this->pdo = new PDO($dsn, $user, $pass, $options);
        } catch (PDOException $e) {
            // Utilisez une gestion des erreurs appropriée
            error_log($e->getMessage());
            die('Erreur de connexion à la base de données. Veuillez réessayer plus tard.');
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new static();
        }
        return self::$instance->pdo;
    }
}

