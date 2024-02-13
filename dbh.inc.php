<?php

// Database connection details
$host = "localhost";
$dbname = "sqlv1";
$username = "root";
$password = "";

// Data Source Name (DSN)
$dsn = "mysql:host={$host};dbname={$dbname}";

try {
    // Establish PDO connection
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle connection errors
    die("Connection failed: " . $e->getMessage());
}

?>
