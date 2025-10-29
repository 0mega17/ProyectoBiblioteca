<?php
require_once '../MODEL/MySQL.php';
require '../vendor/autoload.php'; // PhpSpreadsheet

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$mysql = new MySQL();
$mysql->conectar();
$conexion = $mysql->getConnection();

if (!isset($_GET['tipo'])) {
    die("Error: No se especificó el tipo de informe.");
}

$tipo = $_GET['tipo'];
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Título del archivo y nombre de hoja
$sheet->setTitle('Informe ' . ucfirst($tipo));

switch ($tipo) {
    case 'libros':
        $consulta = "SELECT idLibro, tituloLibro, autorLibro, ISBN, categoriaLibro, cantidadLibro FROM libro";
        $resultado = mysqli_query($conexion, $consulta);

        $sheet->setCellValue('A1', 'ID')
              ->setCellValue('B1', 'Título')
              ->setCellValue('C1', 'Autor')
              ->setCellValue('D1', 'ISBN')
              ->setCellValue('E1', 'Categoría')
              ->setCellValue('F1', 'Cantidad');

        $fila = 2;
        while ($row = mysqli_fetch_assoc($resultado)) {
            $sheet->setCellValue("A$fila", $row['idLibro'])
                  ->setCellValue("B$fila", $row['tituloLibro'])
                  ->setCellValue("C$fila", $row['autorLibro'])
                  ->setCellValue("D$fila", $row['ISBN'])
                  ->setCellValue("E$fila", $row['categoriaLibro'])
                  ->setCellValue("F$fila", $row['cantidadLibro']);
            $fila++;
        }
        break;

    case 'reservas':
        $consulta = "SELECT idReserva, id_Usuario, id_Libro, fechaReserva, estadoReserva FROM reserva";
        $resultado = mysqli_query($conexion, $consulta);

        $sheet->setCellValue('A1', 'ID Reserva')
              ->setCellValue('B1', 'Usuario')
              ->setCellValue('C1', 'Libro')
              ->setCellValue('D1', 'Fecha Reserva')
              ->setCellValue('E1', 'Estado');

        $fila = 2;
        while ($row = mysqli_fetch_assoc($resultado)) {
            $sheet->setCellValue("A$fila", $row['idReserva'])
                  ->setCellValue("B$fila", $row['id_Usuario'])
                  ->setCellValue("C$fila", $row['id_Libro'])
                  ->setCellValue("D$fila", $row['fechaReserva'])
                  ->setCellValue("E$fila", $row['estadoReserva']);
            $fila++;
        }
        break;

    case 'usuarios':
        $consulta = "SELECT idUsuario, nombreUsuario, correoUsuario, tipoUsuario FROM usuario";
        $resultado = mysqli_query($conexion, $consulta);

        $sheet->setCellValue('A1', 'ID')
              ->setCellValue('B1', 'Nombre')
              ->setCellValue('C1', 'Correo')
              ->setCellValue('D1', 'Tipo');

        $fila = 2;
        while ($row = mysqli_fetch_assoc($resultado)) {
            $sheet->setCellValue("A$fila", $row['idUsuario'])
                  ->setCellValue("B$fila", $row['nombreUsuario'])
                  ->setCellValue("C$fila", $row['correoUsuario'])
                  ->setCellValue("D$fila", $row['tipoUsuario']);
            $fila++;
        }
        break;

    case 'prestamos':
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

        $sheet->setCellValue('A1', 'Usuario')
              ->setCellValue('B1', 'Libro')
              ->setCellValue('C1', 'Fecha Préstamo')
              ->setCellValue('D1', 'Fecha Devolución');

        $fila = 2;
        while ($row = mysqli_fetch_assoc($resultado)) {
            $sheet->setCellValue("A$fila", $row['usuario'])
                  ->setCellValue("B$fila", $row['libro'])
                  ->setCellValue("C$fila", $row['fechaPrestamo'])
                  ->setCellValue("D$fila", $row['fechaDevolucion']);
            $fila++;
        }
        break;

    default:
        die("Error: Tipo de informe no válido.");
}

// Autoajustar columnas
foreach (range('A', $sheet->getHighestColumn()) as $col) {
    $sheet->getColumnDimension($col)->setAutoSize(true);
}

// Enviar al navegador
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Informe_' . $tipo . '.xlsx"');
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');

$mysql->desconectar();
exit;
