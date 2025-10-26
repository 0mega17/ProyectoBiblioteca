<?php
require_once '../MODEL/MySQL.php';
header('Content-Type: application/json; charset=utf-8');

$Mysql  = new MySQL();
$Mysql->conectar();
session_start();

if (
    $_SERVER["REQUEST_METHOD"] === "POST" &&
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['contrasena']) && !empty($_POST['contrasena'])
) {
    $emailIngresado = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $contrasenaIngresado = trim($_POST['contrasena']);

    $consultaSql = "SELECT idUsuario, nombreUsuario, apellidoUsuario, emailUsuario, contraseñaUsuario, tipouUsuario
                    FROM usuario 
                    WHERE emailUsuario = '$emailIngresado'";
    $resultado = $Mysql->efectuarConsulta($consultaSql);

    if ($resultado && $resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();

        $contrasenaAlmacenada = $fila['contraseñaUsuario'];

        if (password_verify($contrasenaIngresado, $contrasenaAlmacenada)) {

            // 🔹 Guardamos toda la información del usuario en la sesión
            $_SESSION['idUsuario'] = $fila['idUsuario'];
            $_SESSION['nombreUsuario'] = $fila['nombreUsuario'];
            $_SESSION['apellidoUsuario'] = $fila['apellidoUsuario'];
            $_SESSION['emailUsuario'] = $fila['emailUsuario'];
            $_SESSION['tipouUsuario'] = $fila['tipouUsuario'];

            echo json_encode([
                "validacion" => true,
                "mensaje" => "Inicio de sesión exitoso",
                "usuario" => [
                    "idUsuario" => $fila['idUsuario'],
                    "nombre" => $fila['nombreUsuario'],
                    "apellido" => $fila['apellidoUsuario'],
                    "email" => $fila['emailUsuario'],
                    "rol" => $fila['tipouUsuario']
                ]
            ]);
        } else {
            echo json_encode([
                "validacion" => false,
                "mensaje" => "Contraseña incorrecta"
            ]);
        }
    } else {
        echo json_encode([
            "validacion" => false,
            "mensaje" => "Usuario no encontrado"
        ]);
    }
}

$Mysql->desconectar();
?>
