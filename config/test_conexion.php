<?php
require_once 'config/database.php';

echo "<h2>Prueba de conexión a la base de datos</h2>";

try {
    // Intentamos ejecutar una consulta simple
    $stmt = $conexion->query("SHOW TABLES");

    echo "<p style='color: green;'>✅ Conexión exitosa a la base de datos <strong>tiendademascotas</strong>.</p>";

    echo "<h4>Tablas encontradas:</h4>";
    echo "<ul>";
    while ($fila = $stmt->fetch(PDO::FETCH_NUM)) {
        echo "<li>" . htmlspecialchars($fila[0]) . "</li>";
    }
    echo "</ul>";
} catch (PDOException $e) {
    echo "<p style='color: red;'>❌ Error al conectar o consultar: " . $e->getMessage() . "</p>";
}
