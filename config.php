<?php
// Configuration de la base de données
define('DB_HOST', 'localhost');
define('DB_NAME', 'lahatech');
define('DB_USER', 'root');
define('DB_PASS', '');

// Initialisation de la session
session_start();

// Connexion PDO
try {
    $db = new PDO(
        'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8mb4',
        DB_USER, 
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );
} catch (PDOException $e) {
    die('Erreur de connexion à la base de données : ' . $e->getMessage());
}
?>