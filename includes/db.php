<?php

$host = 'localhost';  // Gewijzigd van 'db' naar 'localhost' voor XAMPP
$db   = 'mydb';       // De naam van de database die je in XAMPP phpMyAdmin aanmaakt
$user = 'root';        // De standaard XAMPP gebruikersnaam
$pass = '';            // Het standaard XAMPP wachtwoord is leeg
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
