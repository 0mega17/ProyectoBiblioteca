<?php
header('Content-Type: application/json; charset=utf-8');
require_once '../MODEL/MySQL.php';
$sql = new MySQL;
$sql ->conectar();
if (
    $_SERVER["REQUEST_METHOD"] === 'POST' && isset($_POST['nombreUsuario']) && !empty($_POST['nombreUsuario'])
    && isset($_POST['apellidoUsuario']) && !empty($_POST['apellidoUsuario']) && isset($_POST['emailUsuario']) && !empty($_POST['emailUsuario'])
    && isset($_POST['contrasenaUsuario']) && !empty($_POST['contrasenaUsuario']) && isset($_POST['rol']) && !empty($_POST['rol'])
) {

    $nombre = filter_input(INPUT_POST, 'nombreUsuario', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $apellido = filter_input(INPUT_POST, 'apellidoUsuario', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = $_POST['emailUsuario'];
    $contrasena = trim( $_POST['contrasenaUsuario']);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
   
    // lo que se hace aca es encryptar la contrasena que se ingresa para poder tener mas seguridad para el usuario
    // en pocas palabras en una buena practica :3 
    $contrasenaEncriptada = password_hash($contrasena, PASSWORD_DEFAULT);
    $rol = filter_input(INPUT_POST, 'rol', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $consultaSql = "insert into usuario (nombreUsuario,apellidoUsuario,emailUsuario,contraseñaUsuario,tipouUsuario) 
    values ('$nombre','$apellido','$email','$contrasenaEncriptada','$rol')";
    $resultado = $sql ->efectuarConsulta($consultaSql);
    if ($resultado){
        echo json_encode([
            "validacion" => true,
        ]);
    } else {
        echo json_encode([
            "validacion" => false,
        ]);
    }
    $sql -> desconectar();
}
