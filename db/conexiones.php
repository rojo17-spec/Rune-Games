<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rune_games";

// crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("conexión fallida: " . $conn->connect_error);
}
?>