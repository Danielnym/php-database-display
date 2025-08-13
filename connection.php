<?php
// establishing a connection to the database in order
//  to fetch data displaying it in the browser and
//  show database data in tables

$host = "127.0.0.1";
$port = "3306";
$dbname = "Business_Management_System";
$username = "root";
$password = "Mysql24.";

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection successfull.";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

