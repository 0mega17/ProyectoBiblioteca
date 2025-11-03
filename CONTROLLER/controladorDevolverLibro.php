<?php
require_once '../MODEL/MySQL.php';
header('Content-Type: application/json; charset=utf-8');
$Mysql = new MySQL();
$Mysql->conectar();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];
    $consultaSql = "update reserva set estadoReserva = 'devuelto' where idReserva = $id";
    $resultado = $Mysql->efectuarConsulta($consultaSql);
    if ($resultado) {
        // para hacer devolver el libro como debe de ser al momento de ser prestado se debe obtener el id del
        // libro por medio del id de la reserva a la que pertenece y se tiene que seguir los siguientes pasos :3

        // primero se debe de sacar el id del libro
        $consultaIdLibro = "select id_Libro from reserva where idReserva = $id";
        $datos = $Mysql->efectuarConsulta($consultaIdLibro);
        if ($datos) {
            $fila = $datos->fetch_assoc();
            $idLibro = $fila['id_Libro'];
            // ahora con la bariable de idLibro se puede hacer facilmente el update del libro :3 
            $consultaRestablecerlibro = "update libro set cantidadLibro = cantidadLibro + 1
            where idLibro = $idLibro";
            $Mysql->efectuarConsulta($consultaRestablecerlibro);
        }
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
