<?php
require_once '../MODEL/MySQL.php';
header('Content-Type: application/json; charset=utf-8');
$Mysql = new MySQL();
$Mysql->conectar();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];
    $dias = $_POST['dias'];
    $consultaSql = " INSERT INTO prestamo (id_Reserva, fechaPrestamo, fechaDevolucion)
            VALUES ($id, CURDATE(), DATE_ADD(CURDATE(), INTERVAL $dias DAY))";
    $resultado = $Mysql->efectuarConsulta($consultaSql);
    if ($resultado) {
        $actualizarReserva = "update reserva set estadoReserva = 'prestado' where idReserva= $id";
        $Mysql->efectuarConsulta($actualizarReserva);
        echo json_encode(
            [
                "validacion" => true,
            ]
        );
    } else {
        echo json_encode(
            [
                "validacion" => false,
            ]
        );
    }
}
