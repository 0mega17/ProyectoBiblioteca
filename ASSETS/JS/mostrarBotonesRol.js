document.addEventListener("DOMContentLoaded", () => {
  let menu = document.getElementById("menu");
  let paginasAdmin = [
    { nombre: "InicioAdmin", icono: "", link: "index.php" },
    { nombre: "Crear usuario", icono: "", link: "crearCuentaAdmin.php" },
    { nombre: "Usuarios", icono: "", link: "panelUsuarios.php" },
    { nombre: "Crear libros", icono: "", link: "crearLibro.php" },
    {
      nombre: "Libros registrados",
      icono: "",
      link: "verLibrosRegistrados.php",
    },
    { nombre: "Reservas", icono: "", link: "" },
    { nombre: "Prestamos", icono: "", link: "" },
    { nombre: "Reportes", icono: "", link: "" },
  ];
  let paginaCliente = [{ nombre: "InicioCliente", icono: "", link: "" }];
  fetch("../CONTROLLER/controladorTraerRol.php")
    .then(function (respuesta) {
      return respuesta.json();
    })
    .then(function (json) {
      if (json.rol === "administrador") {
        paginasAdmin.forEach((pagina) => {
          let li = document.createElement("li");
          li.classList.add("sidebar-item");
          let a = document.createElement("a");
          a.classList.add("sidebar-link");
          a.setAttribute("href", pagina.link);
          let i = document.createElement("i");
          i.classList.add("align-middle");
          i.setAttribute("data-feather", pagina.icono);
          let span = document.createElement("span");
          span.classList.add("align-middle");
          span.textContent = pagina.nombre;
          a.append(i);
          a.append(span);
          li.append(a);
          menu.append(li);
        });
      } else if (json.rol === "cliente") {
        paginaCliente.forEach((pagina) => {
          let li = document.createElement("li");
          li.classList.add("sidebar-item");
          let a = document.createElement("a");
          a.classList.add("sidebar-link");
          a.setAttribute("href", pagina.link);
          let i = document.createElement("i");
          i.classList.add("align-middle");
          i.setAttribute("data-feather", pagina.icono);
          let span = document.createElement("span");
          span.classList.add("align-middle");
          span.textContent = pagina.nombre;
          a.append(i);
          a.append(span);
          li.append(a);
          menu.append(li);
        });
      }
    })
    .catch((error) => console.error("Error en el fetch:", error));
});
