<?php

class Categoria
{
    private $db;

    public function __construct($conexion)
    {
        $this->db = $conexion;
    }

    // Método para crear una categoría
    public function crear($nombre)
    {
        // Prepara la consulta SQL
        $stmt = $this->db->prepare("INSERT INTO categorias (Nombre_Categoria) VALUES (?)");

        // Vincula el parámetro para la consulta
        $stmt->bind_param("s", $nombre);

        // Ejecuta la consulta
        if ($stmt->execute([':nombre' => $nombre])) {
            return true;  // Retorna true si la inserción fue exitosa
        } else {
            return false; // Retorna false si hubo un error
        }
    }
}
