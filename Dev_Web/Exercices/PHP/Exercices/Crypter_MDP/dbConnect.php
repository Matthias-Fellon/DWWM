<?php
try {
    $db = new PDO('mysql:host=localhost;port=3306;dbname=users', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>