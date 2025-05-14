<!DOCTYPE html>
<html lang="es">
<?php include('layouts/head.php'); ?>

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
</body>

</html>