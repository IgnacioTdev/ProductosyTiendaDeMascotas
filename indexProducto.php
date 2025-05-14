<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos - Tienda de Mascotas</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <body> <link rel="stylesheet" href="assets/css/style.css">




    <style>
        body {
            background-color: #fef6f9;
        }
        .table-container {
            margin-top: 50px;
        }
    </style>
</head>
<script src="assets/js/app.js"></script>

<div class="container table-container">
    <h2 class="text-center mb-4">Productos - Tienda de Mascotas</h2>

    <!-- Botón para agregar producto -->
    <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modalProducto">
        <i class="fas fa-plus"></i> Nuevo Producto
    </button>

    <!-- Tabla de productos simulados -->
    <table class="table table-bordered table-striped">
        <thead class="table-primary">
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Comida para perro</td>
                <td>Bolsa de 2kg, marca DogPro</td>
                <td>$12.000</td>
                <td>15</td>
                <td>
                    <button class="btn btn-danger btn-sm" onclick="eliminarProducto('Comida para perro')">
                        <i class="fas fa-trash"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Pelota con sonido</td>
                <td>Pelota plástica para perros pequeños</td>
                <td>$4.500</td>
                <td>25</td>
                <td>
                    <button class="btn btn-danger btn-sm" onclick="eliminarProducto('Pelota con sonido')">
                        <i class="fas fa-trash"></i>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="modalProducto" tabindex="-1" aria-labelledby="modalProductoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalProductoLabel">Agregar Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="nombreProducto" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombreProducto" required>
                </div>
                <div class="mb-3">
                    <label for="descripcionProducto" class="form-label">Descripción</label>
                    <input type="text" class="form-control" id="descripcionProducto" required>
                </div>
                <div class="mb-3">
                    <label for="precioProducto" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="precioProducto" required>
                </div>
                <div class="mb-3">
                    <label for="stockProducto" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="stockProducto" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </form>
    </div>
</div>


<script>
    function eliminarProducto(nombre) {
        Swal.fire({
            title: `¿Eliminar "${nombre}"?`,
            text: "Esta acción no se puede deshacer.",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#aaa',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire('Eliminado', `"${nombre}" ha sido eliminado.`, 'success');
                // Aquí iría la lógica para eliminar de la BD
            }
        });
    }
</script>
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- Bootstrap JS y dependencias -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
