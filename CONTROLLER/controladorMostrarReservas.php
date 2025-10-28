<?php
require_once '../MODEL/MySQL.php';
header('Content-Type: application/json; charset=utf-8');
$Mysql = new MySQL();
session_start();

$Mysql->conectar();
// se debe de capturar el id del usuario para mostrar solo las reservas de el y se hace 
// por medio de la sesion que esta abierta :b 
$reserva=[];
$idUsuario = $_SESSION['id'];
$consultaSql ="SELECT reserva.idReserva, libro.tituloLibro, reserva.fechaReserva, reserva.estadoReserva
FROM reserva
INNER JOIN libro ON reserva.id_Libro = libro.idLibro
WHERE reserva.id_Usuario = $idUsuario
AND reserva.estadoReserva = 'pendiente' ORDER BY fechaReserva DESC";
$resultado = $Mysql->efectuarConsulta($consultaSql);
while ($fila = mysqli_fetch_assoc($resultado)) {
    $reserva[] = $fila;
}

echo json_encode($reserva, JSON_UNESCAPED_UNICODE);
