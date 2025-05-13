$(document).ready(function () {
    let total = 0;

    // Función para agregar un nuevo producto a la tabla
    $("#btnAgregarProducto").on("click", function () {
        const nuevaFila = `
        <tr>
            <td><input type="text" class="form-control nombre-producto" placeholder="Ej: Alimento para perro"></td>
            <td><input type="number" class="form-control cantidad" min="1" value="1"></td>
            <td><input type="number" class="form-control precio-unitario" min="0" value="0"></td>
            <td class="subtotal">$0</td>
            <td><button class="btn btn-danger btnEliminar"><i class="fas fa-trash-alt"></i></button></td>
        </tr>`;
        $("#tablaProductos tbody").append(nuevaFila);
        actualizarEventos();
        calcularTotal();
    });

    // Función para eliminar un producto
    function actualizarEventos() {
        $(".btnEliminar").off("click").on("click", function () {
            $(this).closest("tr").remove();
            calcularTotal();
        });

        // Cuando cambian cantidad o precio unitario
        $(".cantidad, .precio-unitario").off("input").on("input", function () {
            calcularSubtotal($(this).closest("tr"));
            calcularTotal();
        });
    }

    // Calcular subtotal por producto
    function calcularSubtotal(fila) {
        const cantidad = parseInt(fila.find(".cantidad").val()) || 0;
        const precio = parseInt(fila.find(".precio-unitario").val()) || 0;
        const subtotal = cantidad * precio;
        fila.find(".subtotal").text(`$${subtotal}`);
    }

    // Calcular total general
    function calcularTotal() {
        let total = 0;
        $("#tablaProductos tbody tr").each(function () {
            const cantidad = parseInt($(this).find(".cantidad").val()) || 0;
            const precio = parseInt($(this).find(".precio-unitario").val()) || 0;
            total += cantidad * precio;
        });
        $("#totalVenta").text(`$${total}`);
    }

    // Confirmar venta (simulado con SweetAlert)
    $("#btnConfirmarVenta").on("click", function () {
        Swal.fire({
            icon: 'success',
            title: 'Venta confirmada',
            text: 'La venta ha sido registrada correctamente.',
        });
    });

    // Anular venta (vaciar tabla)
    $("#btnAnularVenta").on("click", function () {
        Swal.fire({
            title: '¿Estás seguro?',
            text: 'Esto eliminará todos los productos de la venta.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, anular',
        }).then((result) => {
            if (result.isConfirmed) {
                $("#tablaProductos tbody").empty();
                $("#totalVenta").text("$0");
            }
        });
    });
});

