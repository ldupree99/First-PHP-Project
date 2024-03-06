<?php

// Database connection details
$host = 'localhost';
$dbname= 'firstsql';
$dbusername = 'root';
$dbpassword = '';

try {
    // Establish PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle connection errors
    die ("Connection failed: " . $e->getMessage());
}
