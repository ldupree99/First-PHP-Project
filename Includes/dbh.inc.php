<?php

// Database connection details
$host = 'localhost';
$dbname= 'firstsq1';
$dbusername = 'root';
$dbpassword = '';

try {
    // Establish PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname" . $dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle connection errors
    die ("Connection failed: " . $e->getMessage());
}
