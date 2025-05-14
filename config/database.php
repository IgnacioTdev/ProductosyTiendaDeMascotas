// aqui va la configuracion para la conexion hacia mysql
<?php
// Configuración de conexión a la base de datos
$host = 'localhost';      // O la IP/hostname del servidor MySQL
$usuario = 'root';  // Usuario MySQL
$contrasena = 'root'; // Contraseña del usuario
$base_datos = 'tiendaDeMascotas';  // Nombre de la base de datos

// Crear conexión
$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Establecer conjunto de caracteres
$conexion->set_charset("utf8mb4");

// Opcional: mostrar mensaje si todo va bien
// echo "Conexión exitosa";
?>