<?php
require_once '../MODEL/MySQL.php';
header('Content-Type: application/json; charset=utf-8');
$MySql = new MySQL;
$MySql->conectar();
$consultaSql = "select * from libro";
$resultado = $MySql->efectuarConsulta($consultaSql);
$libros = [];
while ($fila = mysqli_fetch_assoc($resultado)) {
    $libros[] = $fila; 
}

echo json_encode($libros, JSON_UNESCAPED_UNICODE);
