<?php
// Incluir la configuración de la base de datos
require_once 'config/database.php';

// Incluir el controlador
require_once 'controllers/CategoriaController.php';

// Configurar el controlador por defecto
$controller = 'Categoria';
$action = 'crear';

// Verificar si hay una acción en la URL
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

// Crear la instancia del controlador y ejecutar la acción
$controllerObj = new CategoriaController($conexion);

if (method_exists($controllerObj, $action)) {
    $controllerObj->$action();
} else {
    echo "Acción no encontrada.";
}
