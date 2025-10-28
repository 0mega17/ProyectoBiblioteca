<?php
require_once '../MODEL/MySQL.php';
require_once '../LIBRERIAS/FPDF/fpdf.php';

$mysql = new MySQL();
$mysql->conectar();
$conexion = $mysql->getConnection();

if (!isset($_GET['tipo'])) {
    die("Error: No se especificó el tipo de informe.");
}

$tipo = $_GET['tipo'];
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 14);

// ENCABEZADO GENERAL
$pdf->Cell(0, 10, 'Informe de la Biblioteca', 0, 1, 'C');
$pdf->Ln(5);

switch ($tipo) {
    case 'libros':
        $pdf->Cell(0, 10, 'Inventario de Libros', 0, 1, 'C');
        $pdf->Ln(5);

        $consulta = "SELECT idLibro, tituloLibro, autorLibro, ISBN, categoriaLibro, disponibilidadLibro, cantidadLibro FROM libro";
        $resultado = mysqli_query($conexion, $consulta);

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(20, 8, 'ID', 1);
        $pdf->Cell(50, 8, 'Titulo', 1);
        $pdf->Cell(35, 8, 'Autor', 1);
        $pdf->Cell(30, 8, 'ISBN', 1);
        $pdf->Cell(25, 8, 'Categoria', 1);
        $pdf->Cell(30, 8, 'Cantidad', 1);
        $pdf->Ln();

        $pdf->SetFont('Arial', '', 10);
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $pdf->Cell(20, 8, $fila['idLibro'], 1);
            $pdf->Cell(50, 8, $fila['tituloLibro'], 1);
            $pdf->Cell(35, 8, $fila['autorLibro'], 1);
            $pdf->Cell(30, 8, $fila['ISBN'], 1);
            $pdf->Cell(25, 8, $fila['categoriaLibro'], 1);
            $pdf->Cell(30, 8, $fila['cantidadLibro'], 1);
            $pdf->Ln();
        }
        break;

    case 'reservas':
        $pdf->Cell(0, 10, 'Informe de Reservas', 0, 1, 'C');
        $pdf->Ln(5);

        $consulta = "SELECT idReserva, id_Usuario, id_Libro, fechaReserva, estadoReserva FROM reserva";
        $resultado = mysqli_query($conexion, $consulta);

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(20, 8, 'ID', 1);
        $pdf->Cell(30, 8, 'Usuario', 1);
        $pdf->Cell(30, 8, 'Libro', 1);
        $pdf->Cell(50, 8, 'Fecha', 1);
        $pdf->Cell(50, 8, 'Estado', 1);
        $pdf->Ln();

        $pdf->SetFont('Arial', '', 10);
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $pdf->Cell(20, 8, $fila['idReserva'], 1);
            $pdf->Cell(30, 8, $fila['id_Usuario'], 1);
            $pdf->Cell(30, 8, $fila['id_Libro'], 1);
            $pdf->Cell(50, 8, $fila['fechaReserva'], 1);
            $pdf->Cell(50, 8, $fila['estadoReserva'], 1);
            $pdf->Ln();
        }
        break;

    case 'usuarios':
        $pdf->Cell(0, 10, 'Listado de Usuarios', 0, 1, 'C');
        $pdf->Ln(5);

        $consulta = "SELECT idUsuario, nombreUsuario, correoUsuario, tipoUsuario FROM usuario";
        $resultado = mysqli_query($conexion, $consulta);

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(20, 8, 'ID', 1);
        $pdf->Cell(50, 8, 'Nombre', 1);
        $pdf->Cell(70, 8, 'Correo', 1);
        $pdf->Cell(40, 8, 'Tipo', 1);
        $pdf->Ln();

        $pdf->SetFont('Arial', '', 10);
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $pdf->Cell(20, 8, $fila['idUsuario'], 1);
            $pdf->Cell(50, 8, $fila['nombreUsuario'], 1);
            $pdf->Cell(70, 8, $fila['correoUsuario'], 1);
            $pdf->Cell(40, 8, $fila['tipoUsuario'], 1);
            $pdf->Ln();
        }
        break;

    case 'prestamos':
        $pdf->Cell(0, 10, 'Historial de Prestamos', 0, 1, 'C');
        $pdf->Ln(5);

        $consulta = "
            SELECT u.nombreUsuario AS usuario, 
                   l.tituloLibro AS libro, 
                   p.fechaPrestamo, 
                   p.fechaDevolucion
            FROM prestamo p
            INNER JOIN reserva r ON p.id_Reserva = r.idReserva
            INNER JOIN usuario u ON r.id_Usuario = u.idUsuario
            INNER JOIN libro l ON r.id_Libro = l.idLibro
        ";

        $resultado = mysqli_query($conexion, $consulta);

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(50, 8, 'Usuario', 1);
        $pdf->Cell(60, 8, 'Libro', 1);
        $pdf->Cell(40, 8, 'Prestamo', 1);
        $pdf->Cell(40, 8, 'Devolucion', 1);
        $pdf->Ln();

        $pdf->SetFont('Arial', '', 10);
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $pdf->Cell(50, 8, utf8_decode($fila['usuario']), 1);
            $pdf->Cell(60, 8, utf8_decode($fila['libro']), 1);
            $pdf->Cell(40, 8, $fila['fechaPrestamo'], 1);
            $pdf->Cell(40, 8, $fila['fechaDevolucion'], 1);
            $pdf->Ln();
        }
        break;

    default:
        die("Error: Tipo de informe no válido.");
}

$pdf->Output();
$mysql->desconectar();
?>
