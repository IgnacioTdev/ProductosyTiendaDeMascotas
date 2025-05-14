<?php
$host = 'localhost';
$db = 'tiendademascotas'; // exactamente como fue creada
$user = 'root';
$pass = 'root';
$charset = 'utf8mb4'; // ¡corregido!

$dsn = "mysql:host=$host;port=3306;dbname=$db;charset=$charset";

try {
    $conexion = new PDO($dsn, $user, $pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
