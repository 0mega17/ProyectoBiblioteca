document
  .getElementById("formularioCrearUsuarios")
  .addEventListener("submit", function (e) {
    e.preventDefault();
    let datos = new FormData(this);
    fetch("../CONTROLLER/controladorCrearCuenta.php", {
      method: "POST",
      body: datos,
    })
      .then(function (respuesta) {
        return respuesta.json();
      })
      .then(function (json) {
        if (json.validacion) {
          Swal.fire({
            title: "¡Usuario creado!",
            text: "El registro fue exitoso",
            icon: "success",
            confirmButtonText: "Aceptar",
            confirmButtonColor: "#3085d6",
          }).then((result) => {
            if (result.isConfirmed) {
              
               document
                 .querySelectorAll("input")
                 .forEach((input) => (input.value = ""));

               // 🔹 Limpia los select (vuelve al primer valor por defecto)
               document
                 .querySelectorAll("select")
                 .forEach((select) => (select.selectedIndex = 0));
            }
          });
        } else {
          Swal.fire({
            title: "Error",
            text: "Ocurrió un error al crear el usuario",
            icon: "error",
            confirmButtonText: "Reintentar",
            confirmButtonColor: "#d33",
          });
        }
      });
  });
