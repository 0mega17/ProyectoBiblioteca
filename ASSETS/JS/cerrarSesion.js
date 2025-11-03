// este archivo lo tendran todas las pagina del proyecto para poder cerrar la sesion cuando el usuario lo desee
document
  .getElementById("btnCerrarSesion")
  .addEventListener("click", function () {
    Swal.fire({
      title: "¿Cerrar sesión?",
      text: "Tu sesión actual se cerrará.",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Sí, cerrar sesión",
      cancelButtonText: "Cancelar",
      reverseButtons: true,
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "../CONTROLLER/controladorLogout.php";
      }
    });
  });
