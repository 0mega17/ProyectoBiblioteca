<?php
header('Content-Type: application/json');
require_once '../MODEL/MySQL.php';
$sql = new MySQL;
$sql->conectar();
$consultaSql = "select idUsuario,nombreUsuario as nombre, apellidoUsuario as apellidos, emailUsuario as correo, tipouUsuario from usuario";
$resultado = $sql->efectuarConsulta($consultaSql);
$datosUsuario = array();
while ($fila = $resultado->fetch_assoc()) {
    $usuarios[] = $fila;
}
echo json_encode($usuarios, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
$sql -> desconectar();
    


