<?php
// este controlador se basa en en aprobar la reserva 
require_once '../MODEL/MySQL.php';
header('Content-Type: application/json; charset=utf-8');
$Mysql = new MySQL();
session_start();
$Mysql->conectar();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idReserva = $_POST['id'];
    $consultaSql = "update reserva set estadoReserva = 'aprobada' where idReserva = $idReserva";
    $resultado = $Mysql->efectuarConsulta($consultaSql);
    if ($resultado) {
        echo json_encode([
            "validacion" => true,
        ]);
    } else {
        echo json_encode([
            "validacion" => false,
        ]);
    }
}
