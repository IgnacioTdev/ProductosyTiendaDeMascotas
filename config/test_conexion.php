<?php
require_once 'models/Categoria.php';

class CategoriaController
{
    private $modelo;

    public function __construct($conexion)
    {
        // Crear una instancia del modelo
        $this->modelo = new Categoria($conexion);
    }

    // Método para crear una categoría
    public function crear()
    {
        // Si el formulario fue enviado (POST)
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'] ?? '';  // Toma el valor del campo 'nombre'

            if (!empty($nombre)) {
                // Llamar al modelo para guardar la categoría
                $resultado = $this->modelo->crear($nombre);

                if ($resultado) {
                    // Redirigir al listado de categorías si todo salió bien
                    header('Location: index.php?action=index');  // Cambia según tu lógica de redirección
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
