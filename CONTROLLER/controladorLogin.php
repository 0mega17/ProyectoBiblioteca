<?php
require_once '../MODEL/MySQL.php';
$Mysql  = new MySQL();
$Mysql->conectar();
session_start();
if (
    $_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['email']) && !empty($_POST['email'])
    && isset($_POST['contrasena'])   && !empty($_POST['contrasena'])
) {
    $emailIngresado = $_POST['email'];
    $contrasenaIngresado = $_POST['contrasena'];
    $emailIngresado = filter_var($emailIngresado, FILTER_SANITIZE_EMAIL);
    $contrasenaIngresado = htmlspecialchars(trim($contrasenaIngresado));
    $consultaSql = "SELECT emailUsuario AS correo, 
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
        if ($emailIngresado === $emailAlmacenado && $contrasenaIngresado === $contrasenaAlmacenada) {
           
            header("Location: ../VIEW/index.php");
            exit();
        } else {

           
        }
    }
}
$Mysql->desconectar();
