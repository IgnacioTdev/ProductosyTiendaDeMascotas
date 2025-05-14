<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Categoría</title>
</head>

<body>

    <h1>Crear Nueva Categoría</h1>

    <form action="index.php?action=crear" method="POST">
        <div>
            <label for="nombre">Nombre de la Categoría:</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>
        <button type="submit">Crear</button>
    </form>

    <a href="index.php?action=index">Volver a la lista de categorías</a>

</body>

</html>