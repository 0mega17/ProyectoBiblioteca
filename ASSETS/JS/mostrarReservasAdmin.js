document.addEventListener("DOMContentLoaded", () => {
  let datosReservas = document.getElementById("datosReservas");

  fetch("../CONTROLLER/controladorReservasAdmin.php")
    .then((respuesta) => respuesta.json())
    .then((datos) => {
      datosReservas.innerHTML = "";

      // Crear filas con botones
      datos.forEach((reserva) => {
        let fila = document.createElement("tr");
        fila.innerHTML = `
          <td>${reserva.tituloLibro}</td>
          <td>${reserva.nombreUsuario} ${reserva.apellidoUsuario}</td>
          <td>${reserva.fechaReserva}</td>
          <td>${reserva.estadoReserva}</td>
          <td>
            <button class="btn btn-success btn-sm btnValidar" data-id="${reserva.idReserva}">
              <i class="bi bi-check-circle"></i> Validar
            </button>
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

              fetch("../CONTROLLER/controladorEliminarReservaAdmin.php", {
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
                      location.reload();
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

  
      document.querySelectorAll(".btnValidar").forEach((boton) => {
        boton.addEventListener("click", function () {
          Swal.fire({
            title: "¿Validar esta reserva?",
            text: "La reserva será marcada como validada.",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#198754",
            cancelButtonColor: "#6c757d",
            confirmButtonText: "Sí, validar",
            cancelButtonText: "Cancelar",
          }).then((result) => {
            if (result.isConfirmed) {
              let id = parseInt(this.dataset.id);

              fetch("../CONTROLLER/controladorValidarReserva.php", {
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
                      title: "Reserva validada",
                      text: "La reserva ha sido validada correctamente.",
                      showConfirmButton: false,
                      timer: 2000,
                      timerProgressBar: true,
                    }).then(() => {
                      location.reload();
                    });
                  } else {
                    Swal.fire({
                      icon: "error",
                      title: "Error al validar",
                      text: "Ocurrió un problema al intentar validar la reserva. Intenta nuevamente.",
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
