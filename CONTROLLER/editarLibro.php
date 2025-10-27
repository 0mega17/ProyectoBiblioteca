<?php
require_once '../MODEL/MySQL.php';
header('Content-Type: application/json; charset=utf-8');

$MySql = new MySQL;
$MySql->conectar();
if (
    $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['titulo']) && !empty($_POST['titulo']) && isset($_POST['autor'])
    && !empty($_POST['autor']) && isset($_POST['isbn']) &&  !empty($_POST['isbn']) && isset($_POST['categoria']) && !empty($_POST['categoria'])
    && isset($_POST['disponibilidad']) && !empty($_POST['disponibilidad']) && isset($_POST['cantidad']) && !empty($_POST['cantidad'])
) {
    $id = $_POST['id'];
    $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $isbn = filter_input(INPUT_POST, 'isbn', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $disponibilidad = filter_input(INPUT_POST, 'disponibilidad', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $cantidad = filter_input(INPUT_POST, 'cantidad', FILTER_SANITIZE_NUMBER_INT);
    $consultaSql = "update libro set 
    tituloLibro = '$titulo',
    autorLibro = '$autor',
    ISBN = '$isbn',
    categoriaLibro = '$categoria',
    disponibilidadLibro = '$disponibilidad',
    cantidadLibro = $cantidad where idLibro = $id
    ";
    $resultado = $MySql->efectuarConsulta($consultaSql);
    if ($resultado > 0) {
        echo ("paso algo");
    } else {
        echo ("no paso algo :C");
    }
}
