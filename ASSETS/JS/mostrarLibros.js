
document.addEventListener("DOMContentLoaded", () => {
  let cuerpoTabla = document.getElementById("cuerpoTabla");

  fetch("../CONTROLLER/controladorLibrosRegistrados.php")
    .then((respuesta) => respuesta.json())
    .then((datos) => {
      cuerpoTabla.innerHTML = "";

      datos.forEach((libro) => {
        let fila = document.createElement("tr");

        fila.innerHTML = `
            <td>${libro.titulo}</td>
            <td>${libro.autor}</td>
            <td>${libro.ISBN}</td>
            <td>${libro.categoria}</td>
            <td>${libro.disponibilidad}</td>
            <td>${libro.cantidad}</td>
            <td><button class="btn btn-warning btn-sm me-1 btnEditar" data-id="${libro.id}">
    <i class="bi bi-pencil-square"></i> Editar
  </button>
  <button  class="btn btn-danger btn-sm btnEliminar" data-id="${libro.id}">
    <i class="bi bi-trash"></i> Eliminar
  </button></td>
          `;

        cuerpoTabla.appendChild(fila);
      });
      // se debe de hacer la parte de la edicion y elminiacion por que al demorearse en traer los datos el scrip encargado de
      // mandar el id dependiendo de que botn se hizo click  nunca ara nada por que para el nunca existe esos botones que busca
      // haciendolo de esta forma se asegura que si existen los botones y que todo funcione de manera correcta :3
      document.querySelectorAll(".btnEditar").forEach((boton) => {
        boton.addEventListener("click", function () {
          // lo primero que debemos de hacer es mandar el id para que me traiga los datos depues de que me mande los datos
          // esto en forma de retro alimentacion para el Administrador y sepa que se esta haciendo para y todo este nice :D
          let id = parseInt(this.dataset.id);
          fetch("../CONTROLLER/editarLibroTraerDatos.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: `id=${id}`,
          })
            .then((respuesta) => respuesta.json())
            .then((datos) => {
              Swal.fire({
                title: "Editar libro",
                html: ` <form id ="formularioEditar">
                 <div style="display:flex; flex-direction:column; text-align:left;">
                  <label style="margin-bottom:4px;margin-top: 10px;">Título</label>
                  <input id="titulo" class="swal2-input" value="${datos.tituloLibro}" >
                  <label style="margin-bottom:4px; margin-top: 10px;">Autor</label>
                  <input id="autor" class="swal2-input" value="${datos.autorLibro}" >
                   <label style="margin-bottom:4px; margin-top: 10px;">ISBN</label>
                  <input id="isbn" class="swal2-input" value="${datos.ISBN}" >
                   <label style="margin-bottom:4px; margin-top: 10px;">Categoria</label>
                  <input id="categoria" class="swal2-input" value="${datos.categoriaLibro}" >
                    <label style="margin-bottom:4px; margin-top: 10px;">Disponibilidad</label>
                  <input id="disponibilidad" class="swal2-input" value="${datos.disponibilidadLibro}" >
                    <label style="margin-bottom:4px; margin-top: 10px;">Cantidad</label>
                  <input type="number" id="cantidad" class="swal2-input" value="${datos.cantidadLibro}">
                  </div>
                  </form>
              `,
                focusConfirm: false,
                confirmButtonText: "Guardar cambios",
                showCancelButton: true,
                cancelButtonText: "Cancelar",
                preConfirm: () => {
                  // aqui se deben mandar los datos de manera manual para poder despues mandarlos al php :3
                  return {
                    id: datos.idLibro,
                    titulo: document.getElementById("titulo").value,
                    autor: document.getElementById("autor").value,
                    isbn: document.getElementById("isbn").value,
                    categoria: document.getElementById("categoria").value,
                    disponibilidad:
                      document.getElementById("disponibilidad").value,
                    cantidad: document.getElementById("cantidad").value,
                  };
                },
              }).then((resultado) => {
                if (resultado.isConfirmed) {
                  let formularioEdtiar = document.getElementById("formularioEditar")
                  let datos = resultado.value;
                  let formulario = new FormData(formularioEdtiar);
                  formulario.append("id", datos.id);
                  formulario.append("titulo", datos.titulo);
                  formulario.append("autor", datos.autor);
                  formulario.append("isbn", datos.isbn);
                  formulario.append("categoria", datos.categoria);
                  formulario.append("disponibilidad", datos.disponibilidad);
                  formulario.append("cantidad", datos.cantidad);
                  fetch("../CONTROLLER/editarLibro.php", {
                    method: 'POST',
                    body: formulario,
                  });
                 Swal.fire({
                   icon: "success",
                   title: "Libro actualizado correctamente",
                   confirmButtonText: "Aceptar",
                 }).then(() => {
                   location.reload(); 
                 });
                }
              });
            });
        });
      });
    })
    .catch((error) => {
      console.error("Error al cargar los datos:", error);
    });
});
