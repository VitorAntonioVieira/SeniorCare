<?php
$host = 'localhost'; 
$dbname = 'senior_care'; 
$username = 'root';
$password = ''; // S

$conn = new mysqli($host, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
