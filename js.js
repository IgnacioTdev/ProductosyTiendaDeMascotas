document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const nombre = document.getElementById('nombreProducto').value;
        const descripcion = document.getElementById('descripcionProducto').value;
        const precio = document.getElementById('precioProducto').value;
        const stock = document.getElementById('stockProducto').value;

        if (nombre && descripcion && precio && stock) {
            Swal.fire({
                icon: 'success',
                title: 'Producto agregado',
                text: `"${nombre}" se ha agregado correctamente.`,
                timer: 2000,
                showConfirmButton: false
            });

            // Aquí podrías enviar datos a PHP con AJAX
            form.reset();
            const modal = bootstrap.Modal.getInstance(document.getElementById('modalProducto'));
            modal.hide();
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Campos incompletos',
                text: 'Por favor, completa todos los campos.'
            });
        }
    });
});
