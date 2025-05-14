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
        // Preparar la consulta SQL
        $sql = "INSERT INTO Categorias (Nombre_Categoria) VALUES (:nombre)";
        $stmt = $this->db->prepare($sql);

        // Ejecutar la consulta
        $stmt->execute([':nombre' => $nombre]);

        // Retornar el resultado de la ejecución
        return $stmt->rowCount() > 0;
    }
}
