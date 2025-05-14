<?php
require_once 'models/Categoria.php';

require_once 'config/database.php';  // Asegúrate de incluir la configuración de conexión

// Llama a la conexión de la base de datos
$conexion = require_once 'config/database.php';

// Luego, pasa esta conexión al controlador
$controller = new CategoriaController($conexion);


class CategoriaController
{
    private $modelo;

    public function __construct($conexion)
    {
        // Asumiendo que el modelo se conecta a la base de datos
        $this->modelo = new Categoria($conexion);
    }

    // Método para crear la categoría
    public function crear()
    {
        // Debugging: Verifica si los datos llegan
        var_dump($_POST); // Muestra el contenido de $_POST
        die();  // Detiene la ejecución para ver los datos
        // Si el formulario fue enviado (POST)
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'] ?? '';  // Toma el valor del campo 'nombre'

            if (!empty($nombre)) {
                // Llama al modelo para guardar la categoría
                $resultado = $this->modelo->crear($nombre);
                if ($resultado) {
                    // Redirige al listado de categorías si todo salió bien
                    header('Location: index.php?controller=Categoria&action=index');
                    exit;
                } else {
                    echo "Hubo un problema al guardar la categoría.";
                }
            } else {
                echo "El nombre de la categoría no puede estar vacío.";
            }
        }

        // Si no es un POST, mostramos el formulario de creación
        require 'views/vistaCategoria/crear.php';
    }
}
