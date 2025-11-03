<?php
require_once '../MODEL/MySQL.php';
header('Content-Type: application/json; charset=utf-8');
$Mysql = new MySQL();
$Mysql->conectar();
$datos = [];

$consultaSql = "select reserva.idReserva, usuario.nombreUsuario , libro.tituloLibro ,  curdate() as fechaActual, estadoReserva  from reserva 
inner join usuario on id_Usuario = usuario.idUsuario inner join libro on id_Libro = libro.idLibro where estadoReserva = 'aprobada' or estadoReserva = 'prestado' ";
$resultado = $Mysql->efectuarConsulta($consultaSql);
while ($fila = mysqli_fetch_assoc($resultado)) {
    $datos[] = $fila;
}

echo json_encode($datos, JSON_UNESCAPED_UNICODE);
