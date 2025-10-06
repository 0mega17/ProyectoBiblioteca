// lo que hace este js es tomar el formulario y se le da el evento de submit para que tome los datos 
// del formulario 
document.getElementById("formularioCrearCuenta").addEventListener("submit", function (algo) {
    algo.preventDefault();
    // esto hace que no se recargue la pagina 
    let datos = new FormData(this);
    // en datos se crea la variable la cual contiene los datos del formulario
    fetch("../CONTROLLER/controladorCrearUsuario.php", {
      method: "POST",
        body: datos,
      // se le da la ruta y los datos
    })
        // resivimos el json que creal el controlador :3 
      .then(function (respuesta) {
        return respuesta.json();
      })
      .then(function (json) {
// depende de lo que pase muestra una de las dos alaertas para retroalimentar al usuario :D 
        if (json.susses === true) {
          Swal.fire({
            title: "¡Usuario creado!",
            text: "El registro fue exitoso",
            icon: "success",
            confirmButtonText: "Aceptar",
            confirmButtonColor: "#3085d6",
          }).then(() => {
            window.location.href = "login.php";
          });

          document.getElementById("formularioCrearCuenta").reset();
        } else if (json.susses === false) {
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
