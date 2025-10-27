<?php
header('Content-Type: application/json');
require_once '../MODEL/MySQL.php';
$sql = new MySQL;
$sql->conectar();
$consultaSql = "select idLibro as id, tituloLibro as titulo, autorLibro as autor, ISBN, categoriaLibro as categoria,
disponibilidadLibro as disponibilidad, cantidadLibro as cantidad from libro";
$resultado = $sql->efectuarConsulta($consultaSql);
$datosUsuario = array();
while ($fila = $resultado->fetch_assoc()) {
    $libros[] = $fila;
}
echo json_encode($libros, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
$sql->desconectar();
