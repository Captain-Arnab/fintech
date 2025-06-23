<?php
// db.php
// =====================================================
// Database Connection File for FinTrack
// =====================================================

// Database credentials
define('DB_SERVER', 'localhost');            // Usually "localhost" on Hostinger
define('DB_USERNAME', 'u990495009_fintrack_db');    // Replace with your Hostinger DB user
define('DB_PASSWORD', 'fintrack_db@123A');    // Replace with your actual password
define('DB_NAME', 'u990495009_fintrack_db');            // The database you created

// Create the connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check the connection
if ($conn->connect_error) {
    http_response_code(500);
    die(json_encode(["error" => "Database connection failed: " . $conn->connect_error]));
}

// Set character set to utf8mb4 for proper Unicode support
$conn->set_charset("utf8mb4");

?>
