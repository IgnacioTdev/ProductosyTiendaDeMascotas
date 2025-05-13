<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Venta</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #fefaf6;
            font-family: 'Segoe UI', sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        table thead {
            background-color: #e3f2fd;
        }
        .btn-success {
            background-color: #80cbc4;
            border-color: #4db6ac;
        }
        .btn-danger {
            background-color: #ef9a9a;
            border-color: #e57373;
        }
        .btn-primary {
            background-color: #64b5f6;
            border-color: #42a5f5;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3 class="text-center mb-4">Registrar Venta</h3>

        <!-- Botón para agregar productos -->
        <div class="mb-3">
            <button id="btnAgregarProducto" class="btn btn-success">
                <i class="fas fa-cart-plus"></i> Agregar Producto
            </button>
        </div>

        <!-- Tabla de productos -->
        <div class="table-responsive">
            <table class="table table-bordered align-middle text-center" id="tablaProductos">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio Unitario</th>
                        <th>Subtotal</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Filas dinámicas aquí -->
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" class="text-end fw-bold">Total:</td>
                        <td colspan="2" id="totalVenta" class="fw-bold">$0</td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <!-- Botones finales -->
        <div class="mt-3 d-flex justify-content-between">
            <button class="btn btn-danger" id="btnAnularVenta">
                <i class="fas fa-times-circle"></i> Anular Venta
            </button>
            <button class="btn btn-primary" id="btnConfirmarVenta">
                <i class="fas fa-check-circle"></i> Confirmar Venta
            </button>
        </div>
    </div>

    <!-- JS dinámico -->
    <script src="venta.js"></script>
</body>
</html>
