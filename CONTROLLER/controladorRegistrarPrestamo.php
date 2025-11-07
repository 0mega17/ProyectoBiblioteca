<?php
require_once '../MODEL/MySQL.php';
require_once '../CONTROLLER/controladorEnviarEmail.php';
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

        $consultaDatosUsuario = "select usuario.emailUsuario, 
    usuario.nombreUsuario, 
    usuario.apellidoUsuario, 
    prestamo.fechaPrestamo, 
    prestamo.fechaDevolucion
     from prestamo inner join reserva on 
prestamo.id_Reserva = reserva.idReserva inner join usuario on reserva.id_Usuario = usuario.idUsuario
where id_Reserva = $id";
        $resultadoConsulta = $Mysql->efectuarConsulta($consultaDatosUsuario);
        if ($resultadoConsulta->num_rows > 0) {
            $fila = $resultadoConsulta->fetch_assoc();

            $email = $fila['emailUsuario'];
            $nombre = $fila['nombreUsuario'];
            $apellido = $fila['apellidoUsuario'];
            $fechaPrestamo = $fila['fechaPrestamo'];
            $fechaDevolucion = $fila['fechaDevolucion'];
            // funcion  mandar correo :3 
            enviarCorreo($email, $nombre, $apellido, $fechaPrestamo, $fechaDevolucion);
        }




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
