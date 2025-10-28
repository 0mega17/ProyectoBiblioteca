document.addEventListener("DOMContentLoaded", () => {
  let datosReservas = document.getElementById("datosReservas");

  fetch("../CONTROLLER/controladorMostrarReservas.php")
    .then((respuesta) => respuesta.json())
    .then((datos) => {
      datosReservas.innerHTML = "";

      datos.forEach((reserva) => {
        let fila = document.createElement("tr");
        fila.innerHTML = `
          <td>${reserva.tituloLibro}</td>
          <td>${reserva.fechaReserva}</td>
          <td>${reserva.estadoReserva}</td>
          <td>
            <button class="btn btn-danger btn-sm btnEliminar" data-id="${reserva.idReserva}">
              <i class="bi bi-trash"></i> Eliminar
            </button>
          </td>
        `;
        datosReservas.appendChild(fila);
      });

      document.querySelectorAll(".btnEliminar").forEach((boton) => {
        boton.addEventListener("click", function () {
          Swal.fire({
            title: "¿Estás seguro?",
            text: "Esta acción eliminará la reserva de forma permanente.",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Sí, eliminar",
            cancelButtonText: "Cancelar",
          }).then((result) => {
            if (result.isConfirmed) {
              let id = parseInt(this.dataset.id);

              fetch("../CONTROLLER/controladorEliminarReserva.php", {
                method: "POST",
                headers: {
                  "Content-Type": "application/x-www-form-urlencoded",
                },
                body: `id=${id}`,
              })
                .then((respuesta) => respuesta.json())
                .then((json) => {
                  if (json.validacion === true) {
                    Swal.fire({
                      icon: "success",
                      title: "Reserva cancelada",
                      text: "La reserva ha sido cancelada correctamente.",
                      showConfirmButton: false,
                      timer: 2000,
                      timerProgressBar: true,
                    }).then(() => {
                      location.reload(); // recarga la página después de confirmar
                    });
                  } else {
                    Swal.fire({
                      icon: "error",
                      title: "Error al cancelar",
                      text: "Ocurrió un problema al intentar cancelar la reserva. Intenta nuevamente.",
                      confirmButtonColor: "#d33",
                      confirmButtonText: "Entendido",
                    });
                  }
                });
            }
          });
        });
      });
    });
});
