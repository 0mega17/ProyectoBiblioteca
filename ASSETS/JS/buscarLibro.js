let datosLibros = [];

document.addEventListener("DOMContentLoaded", () => {
  fetch("../CONTROLLER/controladorMostrarLibrosUsuarios.php")
    .then((res) => res.json())
    .then((datos) => {
      datosLibros = datos;
      mostrarLibros(datosLibros);
    });
});

function mostrarLibros(lista) {
  let contenedor = document.getElementById("contenedorLibros");
  contenedor.innerHTML = "";
  let row = document.createElement("div");
  row.classList.add("row");

  lista.forEach((libro) => {
    let cantidad = parseInt(libro.cantidadLibro);
    if (cantidad > 0) {
      let col = document.createElement("div");
      col.classList.add("col-4");

      let card = document.createElement("div");
      card.classList.add("card", "m-2", "shadow-sm");
      card.style.width = "18rem";
      card.style.borderRadius = "10px";

      card.innerHTML = `
      <img src="https://placehold.co/300x200" class="card-img-top" alt="Portada del libro">
      <div class="card-body" style="border: 1px solid #807d7dff;border-top: none; border-bottom-left-radius: 6px; border-bottom-right-radius: 6px; padding: 10px;">
        <h5 class="card-title">${libro.tituloLibro}</h5>
        <p class="card-text"><strong>Autor:</strong> ${libro.autorLibro}</p>
        <p class="card-text"><strong>ISBN:</strong> ${libro.ISBN}</p>
        <p class="card-text"><strong>Categoría:</strong> ${libro.categoriaLibro}</p>
        <p class="card-text"><strong>Disponibilidad:</strong> ${libro.disponibilidadLibro}</p>
        <p class="card-text"><strong>Cantidad:</strong> ${libro.cantidadLibro}</p>
        <button class="btn btn-primary btnreservar shadow-sm px-4 py-2" data-id="${libro.idLibro}">
          <i class="bi bi-bookmark-heart me-2"></i> Reservar
        </button>
      </div>
    `;

      col.appendChild(card);
      row.appendChild(col);
    }
  });

  contenedor.appendChild(row);
}

// Manejador del buscador
document.getElementById("buscador").addEventListener("input", (e) => {
  const texto = e.target.value.toLowerCase();

  const filtrados = datosLibros.filter(
    (libro) =>
      libro.tituloLibro.toLowerCase().includes(texto) ||
      libro.autorLibro.toLowerCase().includes(texto) ||
      libro.categoriaLibro.toLowerCase().includes(texto)
  );

  mostrarLibros(filtrados);
});

// Delegación de eventos para los botones "Reservar"
document.getElementById("contenedorLibros").addEventListener("click", (e) => {
  const boton = e.target.closest(".btnreservar"); // Verificamos si se clickeó un botón válido
  if (boton) {
    const id = parseInt(boton.dataset.id);
    console.log("Reserva para libro ID:", id);

    fetch("../CONTROLLER/controladorReservaUsuario.php", {
      method: "POST",
      headers: { "Content-Type": "application/x-www-form-urlencoded" },
      body: `id=${id}`,
    })
      .then((res) => res.json())
      .then((respuesta) => {
        if (respuesta) {
          Swal.fire({
            title: "¡Reserva hecha correctamente! 🎉",
            text: "Tu libro ha sido reservado exitosamente.",
            icon: "success",
            confirmButtonText: "Aceptar",
            confirmButtonColor: "#3085d6",
          }).then(() => {
            window.location.reload();
          });
        } else {
          Swal.fire({
            title: "¡Error al crear la reserva!",
            text: "Ocurrió un problema al intentar registrar la reserva.",
            icon: "error",
            confirmButtonColor: "#d33",
            confirmButtonText: "Intentar de nuevo",
            background: "#fff",
            color: "#333",
          });
        }
      })
      .catch((error) => {
        console.error("Error en la reserva:", error);
        Swal.fire({
          title: "¡Error del servidor!",
          text: "No se pudo conectar con el servidor. Intenta más tarde.",
          icon: "warning",
          confirmButtonColor: "#f8bb86",
          confirmButtonText: "Entendido",
          background: "#fff",
          color: "#333",
        });
      });
  }
});
