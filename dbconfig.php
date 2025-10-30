<?php
// Database configuration
$host = "localhost";       // Host name
$dbname = "grocery_db";    // Database name
$username = "root";        // DB username
$password = "";            // DB password

try {
    // Create a PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Database connected successfully"; // Uncomment for testing
} catch(PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>
