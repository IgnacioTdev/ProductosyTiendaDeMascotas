<?php
require_once 'models/Categoria.php';

class CategoriaController
{
    private Categoria $modelo;

    public function __construct(mysqli $conexion)
    {
        $this->modelo = new Categoria($conexion);
    }

    public function index()
    {
        $categorias = $this->modelo->obtenerTodas();
        require 'views/categorias/index.php';
    }

    public function crear()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'] ?? '';
            if (!empty($nombre)) {
                $this->modelo->crear($nombre);
                header('Location: index.php?controller=Categoria&action=index');
                exit;
            }
        }

        require 'views/categorias/crear.php';
    }

    public function editar()
    {
        $id = $_GET['id'] ?? null;

        if (!$id) {
            header('Location: index.php?controller=Categoria&action=index');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'] ?? '';
            if (!empty($nombre)) {
                $this->modelo->actualizar((int)$id, $nombre);
                header('Location: index.php?controller=Categoria&action=index');
                exit;
            }
        }

        $categoria = $this->modelo->obtenerPorID((int)$id);
        if (!$categoria) {
            echo "Categoría no encontrada.";
            return;
        }

        require 'views/categorias/editar.php';
    }
}
