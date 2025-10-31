<?php
// aqui se debe de hacer la consulta es cambiar el estado de la reserva con un update si el usuario la elimina :3 y asi no se 
//  borra los datos para no tener problemas con la base de datos 
require_once '../MODEL/MySQL.php';
header('Content-Type: application/json; charset=utf-8');
$Mysql = new MySQL();
session_start();

$Mysql->conectar();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $idReserva = $_POST['id'];
    $consultaSql = "update reserva set estadoReserva = 'rechazada' where idReserva = $idReserva";
    $resultado = $Mysql->efectuarConsulta($consultaSql);
    if ($resultado) {
        $consultaIdLibro  = "select id_Libro from reserva where idReserva = $idReserva";
        $resultadoLibro = $Mysql->efectuarConsulta($consultaIdLibro);
        $filaLibro = mysqli_fetch_assoc($resultadoLibro);
        $idLibro = $filaLibro['id_Libro'];
        $consultaAtulizarStock = "UPDATE libro 
SET cantidadLibro = cantidadLibro + 1 
WHERE idLibro = $idLibro";
        $Mysql->efectuarConsulta($consultaAtulizarStock);
        echo json_encode([
            "validacion" => true,
        ]);
    } else {
        echo json_encode([
            "validacion" => false,
        ]);
    }
}
// este otro archivo es casi que el "controladorEliminarReserva.php" lo que cambia es la consulta
// se hizo hasi para tener todo separado y estructurado y para que el proyecto tenga un futuro de mejora :3 

