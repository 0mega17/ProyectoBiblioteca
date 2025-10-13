// para ser mas puesto en la realidad la aplicacion a desarrollar, se tiene que verificar si
// el isbn que esta ingresado es valido antes de guardarlo en la base de datos :3
function funcionValidarISBN() {
  // existen dor formatos de ISBN 10 y 13 entonces lo que hace esta funcion es retornar si el ISBN es valido
  // sin importar el largo de este
  let ISBN = document.getElementById("isbnLibro").value;

  if (ISBN.length === 10 || ISBN.length === 13) {
    if (ISBN.length == 10) {
      let numeros = ISBN.slice(0, 9).split("").map(Number);
      let ultimo = ISBN[9] === "X" ? 10 : parseInt(ISBN[9]);
      numeros.push(ultimo);
      let resultado = 0;
      for (let i = 0; i <= 9; i++) {
        resultado += numeros[i] * (i + 1);
      }
      if (resultado % 11 === 0) {
        return true;
      }
    }
  } else {
    // validacion que si tenga alguno de los formatos validos
    // aqui debo de retornar uno de los los retornos para que en las alertas sea mas comodo ponerlas :3
    return false;
  }
  if (ISBN.length == 13) {
    let numeros = ISBN.slice(0, 12).split("").map(Number);
    let utimoNumero = parseInt(ISBN[12]);
    let controlador = true;
    let resultado = 0;
    let validacion = 0;
    for (let i = 0; i <= 11; i++) {
      if (controlador) {
        resultado += numeros[i] * 1;
        controlador = false;
      } else {
        resultado += numeros[i] * 3;
        controlador = true;
      }
    }
    validacion = (10 - (resultado % 10)) % 10;
    if (utimoNumero == validacion) {
      return true;
    } else {
      return false;
    }
  }
}

document
  .getElementById("formularioCrearLibro")
  .addEventListener("submit", function (e) {
    e.preventDefault();
    if (!funcionValidarISBN()) {
      Swal.fire({
        title: "ISBN inválido",
        text: "El ISBN ingresado no es correcto. Verifica los dígitos y vuelve a intentar.",
        icon: "warning",
        confirmButtonText: "Aceptar",
        confirmButtonColor: "#f39c12",
      });
      return;
    }
    let datos = new FormData(this);
    fetch("../CONTROLLER/controladorCrearLibro.php", {
      method: "POST",
      body: datos,
    })
      .then(function (respuesta) {
        return respuesta.json();
      })
      .then(function (json) {
        if (json.validacion) {
          Swal.fire({
            title: "¡Libro agregado!",
            text: "El libro se ha guardado correctamente en la base de datos.",
            icon: "success",
            confirmButtonText: "Aceptar",
            confirmButtonColor: "#3085d6",
          }).then((result) => {
            if (result.isConfirmed) {
              document
                .querySelectorAll("input")
                .forEach((input) => (input.value = ""));
            }
          });
        } else {
          Swal.fire({
            title: "¡Error!",
            text: "Ocurrió un problema al guardar el libro. Intenta nuevamente.",
            icon: "error",
            confirmButtonText: "Aceptar",
            confirmButtonColor: "#d33",
          });
        }
      });
  });
