<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Agregar Categoría</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container py-4">

    <h1>Agregar Nueva Categoría</h1>

    <form action="index.php?controller=Categoria&action=crear" method="POST" class="mt-4">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de la Categoría</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="index.php?controller=Categoria&action=index" class="btn btn-secondary">Cancelar</a>
    </form>

</body>

</html>