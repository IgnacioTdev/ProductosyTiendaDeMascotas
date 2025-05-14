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
        $stmt = $this->db->prepare("INSERT INTO Categorias (Nombre_Categoria) VALUES (?)");

        // Vincula el parámetro para la consulta
        $stmt->bind_param("s", $nombre);

        // Ejecuta la consulta
        if ($stmt->execute()) {
            return true;  // Retorna true si la inserción fue exitosa
        } else {
            return false; // Retorna false si hubo un error
        }
    }
}
