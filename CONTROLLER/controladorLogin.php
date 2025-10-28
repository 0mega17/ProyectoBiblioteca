<?php
require_once '../MODEL/MySQL.php';
header('Content-Type: application/json; charset=utf-8');
$Mysql  = new MySQL();
$Mysql->conectar();
session_start();
if (
    $_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['email']) && !empty($_POST['email'])
    && isset($_POST['contrasena'])   && !empty($_POST['contrasena'])
) {
    $emailIngresado = $_POST['email'];
    $contrasenaIngresado = trim($_POST['contrasena']);
    $emailIngresado = filter_var($emailIngresado, FILTER_SANITIZE_EMAIL);

    $consultaSql = "SELECT idUsuario, emailUsuario AS correo, 
                       contraseñaUsuario AS contrasena, 
                       tipouUsuario AS rol 
                FROM usuario 
                WHERE emailUsuario = '$emailIngresado'";
    $resultado = $Mysql->efectuarConsulta($consultaSql);
    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        $emailAlmacenado = $fila['correo'];
        $contrasenaAlmacenada = $fila['contrasena'];
        $rolAlmacenado = $fila['rol'];
        $_SESSION['rol'] = $rolAlmacenado;
        $_SESSION['id'] = $fila['idUsuario'];
        // se hace la verificacion de la contraseña ingresada con lo que trae la consulta y si es valido entonces todo esta nice :D  
        if (password_verify($contrasenaIngresado, $contrasenaAlmacenada)) {

            echo json_encode(
                [
                    "validacion" => true,
                    "rol" => $fila['rol'],
                ]
            );
        } else {
            echo json_encode(
                [
                    "validacion" => false,
                ]
            );
        }
    } else {
        echo json_encode([
            "validacion" => false,
        ]);
    }
}
$Mysql->desconectar();
