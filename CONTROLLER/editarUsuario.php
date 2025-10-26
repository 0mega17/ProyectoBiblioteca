<?php
require_once("../MODEL/MySQL.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $mysql = new MySQL();
    $mysql->conectar();
    $conexion = $mysql->getConnection();

    // Obtenemos los valores enviados por el formulario
    $idUsuario = intval($_POST['idUsuario']);
    $nombre = trim($_POST['nombreUsuario']);
    $apellido = trim($_POST['apellidoUsuario']);
    $email = trim($_POST['emailUsuario']);
    $tipo = trim($_POST['tipouUsuario']);

    // Validación básica
    if (empty($nombre) || empty($apellido) || empty($email)) {
        die("Por favor completa todos los campos.");
    }

    // Actualizamos el usuario correcto
    $query = "UPDATE usuario 
              SET nombreUsuario = '$nombre', 
                  apellidoUsuario = '$apellido', 
                  emailUsuario = '$email', 
                  tipouUsuario = '$tipo'
              WHERE idUsuario = '$idUsuario'";

    if (mysqli_query($conexion, $query)) {

        // 🔹 Si el usuario editado es el mismo que está logueado, actualizamos su sesión también
        if (isset($_SESSION['idUsuario']) && $_SESSION['idUsuario'] == $idUsuario) {
            $_SESSION['nombreUsuario'] = $nombre;
            $_SESSION['apellidoUsuario'] = $apellido;
            $_SESSION['emailUsuario'] = $email;
            $_SESSION['tipouUsuario'] = $tipo;
        }

        // Redirigir dependiendo de desde dónde vino
        if (isset($_SESSION['idUsuario']) && $_SESSION['idUsuario'] == $idUsuario) {
            header("Location: ../VIEW/perfil.php?exito=1");
        } else {
            header("Location: ../VIEW/usuarios.php?exito=1");
        }
        exit();
    } else {
        echo "Error al actualizar: " . mysqli_error($conexion);
    }

    $mysql->desconectar();
} else {
    echo "Método no permitido";
}
?>
