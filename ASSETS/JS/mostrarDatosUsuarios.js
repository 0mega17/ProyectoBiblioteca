document.addEventListener("DOMContentLoaded", () => {
  let cuerpoTabla = document.getElementById("cuerpoTabla");

  fetch("../CONTROLLER/controladorPanelUsuarios.php")
    .then((respuesta) => respuesta.json())
    .then((datos) => {
      cuerpoTabla.innerHTML = "";

      datos.forEach((usuario) => {
        let fila = document.createElement("tr");
       
        fila.innerHTML = `
            <td>${usuario.nombre}</td>
            <td>${usuario.apellidos}</td>
            <td>${usuario.correo}</td>
            <td>${usuario.tipouUsuario}</td>
            
            <td><button class="btn btn-warning btn-sm me-1 btnEditar" data-id="${usuario.idUsuario}">
    <i class="bi bi-pencil-square"></i> Editar
  </button>
  <button  class="btn btn-danger btn-sm btnEliminar" data-id="${usuario.idUsuario}">
    <i class="bi bi-trash"></i> Eliminar
  </button></td>
          `;

        cuerpoTabla.appendChild(fila);
      });
    })
    .catch((error) => {
      console.error("Error al cargar los datos:", error);
    });
});
