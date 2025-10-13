<?php
header('Content-Type: application/json; charset=utf-8');
require_once '../MODEL/MySQL.php';
$sql = new MySQL;
$sql->conectar();
if (
    $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tituloLibro']) && !empty($_POST['tituloLibro'])
    && isset($_POST['autorLibro']) && !empty($_POST['autorLibro']) && isset($_POST['isbnLibro']) && !empty($_POST['isbnLibro'])
    && isset($_POST['categoriaLibro']) && !empty($_POST['categoriaLibro']) && isset($_POST['disponibilidadLibro'])
    && !empty($_POST['disponibilidadLibro']) && isset($_POST['cantidadLibro']) && !empty($_POST['cantidadLibro'])
) {

    // ahora despues de la validacion del ISBN se puede guardar el libro :D 
    $titulo = htmlspecialchars($_POST['tituloLibro'], ENT_QUOTES, 'UTF-8');
    $autor = htmlspecialchars($_POST['autorLibro'], ENT_QUOTES, 'UTF-8');
    $isbn = htmlspecialchars($_POST['isbnLibro'], ENT_QUOTES, 'UTF-8');
    $categoria = htmlspecialchars($_POST['categoriaLibro'], ENT_QUOTES, 'UTF-8');
    $disponibilidad = htmlspecialchars($_POST['disponibilidadLibro'], ENT_QUOTES, 'UTF-8');
    $cantidad = $_POST['cantidadLibro'];
    $cantidad = filter_var($cantidad, FILTER_VALIDATE_INT);
    $consultaSql = "insert into libro (tituloLibro,autorLibro,ISBN,categoriaLibro,disponibilidadLibro,cantidadLibro)
values ('$titulo','$autor','$isbn','$categoria','disponibilidad','$cantidad')";
    $resultado = $sql->efectuarConsulta($consultaSql);
    if ($resultado) {
        echo json_encode(
            [
                "validacion" => true,
            ]
        );
    } else {
        echo json_encode([
            "validacion" => false,
        ]);
    }
    $sql->desconectar();
}
