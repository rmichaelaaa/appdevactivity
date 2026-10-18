<?php
// Database server settings
$host = "localhost";
$dbname = "australian_grocery_db";
$username = "root";
$password = ""; // Default XAMPP password is usually empty

try {
    // Establish a PDO connection to the MySQL database
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );

    // Make PDO throw exceptions when database errors occur
    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    // Return query results as associative arrays by default
    $pdo->setAttribute(
        PDO::ATTR_DEFAULT_FETCH_MODE,
        PDO::FETCH_ASSOC
    );

} catch (PDOException $e) {
    // Stop the script if the connection fails
    die("Database connection failed.");
}
?>