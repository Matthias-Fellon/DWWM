<?php
// Paramètres de connexion à la base de données
$host = 'localhost';
$port = '3308';
$dbname = 'rep-v3';
$username = 'root';
$password = '';
$charset = 'utf8mb4';

// DSN (Data Source Name) pour la connexion
$dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=$charset";

// Options pour PDO
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    // Tentative de connexion à la base de données
    $pdo = new PDO($dsn, $username, $password, $options);
    echo "Connexion à la base de données réussie.";
} catch (PDOException $e) {
    // Affichage du message d'erreur en cas d'échec
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>
