<?php
require_once("../MODEL/MySQL.php");

if (isset($_GET['id'])) {
    $idReserva = $_GET['id'];

    $mysql = new MySQL();
    $mysql->conectar();
    $conexion = $mysql->getConnection();

    $query = "UPDATE reserva SET estadoReserva = 'Rechazada' WHERE idReserva = '$idReserva'";
    mysqli_query($conexion, $query);

    $mysql->desconectar();
    header("Location: ../VIEW/reservas.php");
    exit();
}
?>
