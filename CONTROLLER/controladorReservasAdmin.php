<?php require_once '../MODEL/MySQL.php';
header('Content-Type: application/json; charset=utf-8');
$MySql = new MySQL;
$MySql->conectar();
$reserva = [];
$consultaSql = "select reserva.idReserva, usuario.nombreUsuario , usuario.apellidoUsuario, libro.tituloLibro, reserva.fechaReserva,
reserva.estadoReserva from reserva inner join usuario on reserva.id_Usuario = usuario.idUsuario
inner join libro on reserva.id_Libro = libro.idLibro where estadoReserva = 'pendiente' order by fechaReserva desc";
$resultado = $MySql->efectuarConsulta($consultaSql);
while ($fila = mysqli_fetch_assoc($resultado)) {
    $reserva[] = $fila;
}

echo json_encode($reserva, JSON_UNESCAPED_UNICODE);