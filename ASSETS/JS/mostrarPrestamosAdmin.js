document.addEventListener("DOMContentLoaded", () => {
  let datosReservas = document.getElementById("datosReservas");

  fetch("../CONTROLLER/controladorMostrarPrestamos.php")
    .then((respuesta) => respuesta.json())
    .then((datos) => {
      datosReservas.innerHTML = "";

      datos.forEach((reserva) => {
        let fila = document.createElement("tr");
        if (reserva.estadoReserva === "aprobada") {
          fila.innerHTML = `
          <td>${reserva.tituloLibro}</td>
          <td>${reserva.nombreUsuario}</td>
          <td>${reserva.fechaActual}</td>
          <td><input 
  type="number" 
  class="diasPrestamo form-control" 
  placeholder="Días de préstamo" 
  min="1" 
  max="30" 
  required
></td>
          <td>
            <button class="btn btn-success btn-sm btnPrestar" data-id="${reserva.idReserva}">
              <i class="bi bi-trash"></i> Prestar
            </button>
          </td>
        `;
        } else if (reserva.estadoReserva === "prestado") {
          fila.innerHTML = `
          <td>${reserva.tituloLibro}</td>
          <td>${reserva.nombreUsuario}</td>
          <td>${reserva.fechaActual}</td>
          <td><input 
  type="number" 
  class="diasPrestamo form-control" 
  placeholder="Días de préstamo" 
  min="1" 
  max="30" 
  
  disabled
></td>
          <td>
            <button class="btn btn-warning btn-sm btnDevolver" data-id="${reserva.idReserva}">
              <i class="bi bi-trash"></i> Devolver
            </button>
          </td>
        `;
        }

        datosReservas.appendChild(fila);
      });
      if (datos.length === 0) {
        let filaVacia = document.createElement("tr");
        filaVacia.innerHTML = `
          <td colspan="5" class="text-center text-muted">
            No hay préstamos registrados por el momento.
          </td>`;
        datosReservas.appendChild(filaVacia);
      }
      document.querySelectorAll(".btnDevolver").forEach((boton) => {
        boton.addEventListener("click", function () {
          let id = parseInt(this.dataset.id);
          fetch("../CONTROLLER/controladorDevolverLibro.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: `id=${id}`,
          })
            .then((respuesta) => respuesta.json())
            .then((json) => {
              if (json.validacion) {
                Swal.fire({
                  icon: "success",
                  title: "Libro devuelto",
                  text: "El libro ha sido devuelto correctamente",
                  showConfirmButton: false,
                  timer: 2000,
                  timerProgressBar: true,
                }).then(() => {
                  location.reload();
                });
              }
            });
        });
      });

      document.querySelectorAll(".btnPrestar").forEach((boton) => {
        boton.addEventListener("click", function () {
          let id = parseInt(this.dataset.id);
          let fila = this.closest("tr");
          let dias = fila.querySelector(".diasPrestamo").value;
          if (dias === "" || dias <= 0) {
            Swal.fire({
              icon: "warning",
              title: "Campo vacío",
              text: "Por favor, ingresa la cantidad de días del préstamo.",
            });
            return;
          }
          // con esta validacion ya miramos si el campo esta bien diligenciado despues de esto nos toca que hacer
          // los envio al servidor tales como los dias que se van a prestar el libro y pues a que reserva pertenece
          fetch("../CONTROLLER/controladorRegistrarPrestamo.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: `id=${id}&dias=${dias}`,
          })
            .then((respuesta) => respuesta.json())
            .then((json) => {
              if (json.validacion) {
                Swal.fire({
                  icon: "success",
                  title: "Prestamo realizado",
                  text: "El prestamo ha sido realizado correctamente",
                  showConfirmButton: false,
                  timer: 2000,
                  timerProgressBar: true,
                }).then(() => {
                  location.reload();
                });
              }
            });
        });
      });
    })
    .catch((error) => {
      console.error("Error al cargar las reservas:", error);
    });
});
