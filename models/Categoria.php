<?php

class Categoria
{
    private mysqli $conexion;

    public function __construct(mysqli $conexion)
    {
        $this->conexion = $conexion;
    }

    public function obtenerTodas(): array
    {
        $sql = "SELECT * FROM Categorias";
        $resultado = $this->conexion->query($sql);

        return $resultado ? $resultado->fetch_all(MYSQLI_ASSOC) : [];
    }

    public function obtenerPorID(int $id): ?array
    {
        $stmt = $this->conexion->prepare("SELECT * FROM Categorias WHERE ID_Categoria = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();

        return $resultado->num_rows > 0 ? $resultado->fetch_assoc() : null;
    }

    public function crear(string $nombre): bool
    {
        $stmt = $this->conexion->prepare("INSERT INTO Categorias (Nombre_Categoria) VALUES (?)");
        $stmt->bind_param("s", $nombre);
        return $stmt->execute();
    }

    public function actualizar(int $id, string $nombre): bool
    {
        $stmt = $this->conexion->prepare("UPDATE Categorias SET Nombre_Categoria = ? WHERE ID_Categoria = ?");
        $stmt->bind_param("si", $nombre, $id);
        return $stmt->execute();
    }
}
