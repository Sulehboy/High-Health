<?php
// config.php
$servername = "localhost"; // replace with your database server
$username = "root"; // replace with your database username
$password = ""; // replace with your database password
$dbname = "your_database_name"; // replace with your database name

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
