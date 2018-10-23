<?php
//configuracion de la base de datos mysql
$servername = "localhost";
$username = "root";
$password = "zebralimon10";
$dbname = "rockjsrass";

$usuario ="root";
$pass = "1234";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>