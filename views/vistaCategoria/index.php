<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Categorías</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Categorías</h1>
        <a href="index.php?controller=Categoria&action=crear" class="btn btn-primary">Agregar Categoría</a>
    </div>

    <?php if (!empty($categorias)): ?>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categorias as $categoria): ?>
                    <tr>
                        <td><?= $categoria['ID_Categoria'] ?></td>
                        <td><?= htmlspecialchars($categoria['Nombre_Categoria']) ?></td>
                        <td>
                            <a href="index.php?controller=Categoria&action=editar&id=<?= $categoria['ID_Categoria'] ?>" class="btn btn-sm btn-warning">Editar</a>
                            <a href="index.php?controller=Categoria&action=eliminar&id=<?= $categoria['ID_Categoria'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta categoría?');">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="alert alert-info">No hay categorías registradas.</div>
    <?php endif; ?>

</body>

</html>