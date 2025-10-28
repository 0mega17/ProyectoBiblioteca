<?php
// aqui debemos de coger el id del libro que nos manda el js y se debe de hacer dos cosas cuando se agrega una reserva s
// se debe de hacer la resta de la cantidad de libros que tiene la biblioteca para que sea mas realista la cosa :3 
// la consulta no se van a ingresar datos por que la fecha de la reserva se hace en el mismo momento y siempre va a ser pendiente}
// por que la debe de aprobar el admin eso se dede de hacer despues :3 
require_once '../MODEL/MySQL.php';
header('Content-Type: application/json; charset=utf-8');

$MySql = new MySQL;
$MySql->conectar();
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $idUsuario = $_SESSION['id'];
    $consultaSql = "insert into reserva (id_Usuario,id_Libro,fechaReserva,estadoReserva) values ($idUsuario, $id, NOW(), 'pendiente')";
    $resultado = $MySql->efectuarConsulta($consultaSql);
    if ($resultado) {
        $actualizarStock = "UPDATE libro 
                                    SET cantidadLibro = cantidadLibro - 1 
                                    WHERE idLibro = $id";
                                 
        $MySql->efectuarConsulta($actualizarStock);
        $consultaCantidad = "select cantidadLibro from libro where idLibro = $id";
        $res = $MySql->efectuarConsulta($consultaCantidad);
        $cantidad = mysqli_fetch_assoc($res);
        echo json_encode(
            [
                "validacion" => true,
                "catidad" => $cantidad
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

