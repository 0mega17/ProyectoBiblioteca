document.getElementById("formularioIniciarSesion").addEventListener("submit", function (e) {
    e.preventDefault();
    let datosInicioSesion = new FormData(this);
    fetch("../CONTROLLER/controladorLogin.php", {
      method: "POST",
      body: datosInicioSesion,
    })
      .then(function (respuesta) {
        return respuesta.json();
      })
      .then(function (json) {
        console.log(json);
        if (json.validacion === true) {
          Swal.fire({
            title: "Bienido",
            Text: "Correo y contraseña validos",
            icon: "success",
            confirmButtonText: "Aceptar",
            confirmButtonColor: "#3085d6",
          }).then(() => {
            window.location.href = "index.php";
          });
        } else {
          Swal.fire({
            title: "Error",
            text: "Correo o contraseña incorrectos",
            icon: "error",
            confirmButtonText: "Reintentar",
            confirmButtonColor: "#d33",
          });
        }
      });
  });
