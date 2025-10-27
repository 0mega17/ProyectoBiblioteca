<?php
require_once '../MODEL/MySQL.php';
header('Content-Type: application/json; charset=utf-8');
$MySql = new MySQL;
$MySql-> conectar();
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
$id = $_POST['id'];
$consultaSql = "select * from libro where idLibro = $id";
$resultado = $MySql-> efectuarConsulta($consultaSql);
if($resultado){
 $libro = $resultado->fetch_assoc();
    echo json_encode($libro);
}

}
$MySql->desconectar();
?>