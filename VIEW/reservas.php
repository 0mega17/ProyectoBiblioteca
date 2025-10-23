<?php
require_once("../MODEL/MySQL.php");
session_start();

$mysql = new MySQL();
$mysql->conectar();
$conexion = $mysql->getConnection();

$query = "SELECT r.idReserva, r.fechaReserva, r.estadoReserva, u.nombre AS usuario, l.titulo AS libro 
          FROM reserva r
          INNER JOIN usuario u ON r.idUsuario = u.idUsuario
          INNER JOIN libro l ON r.idLibro = l.idLibro";

$resultado = mysqli_query($conexion, $query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Reservas - Biblioteca</title>
    <link href="../ASSETS/CSS/app.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />
</head>
<body>
<div class="wrapper">
    <!-- ======== SIDEBAR ======== -->
    <nav id="sidebar" class="sidebar js-sidebar">
        <div class="sidebar-content js-simplebar">
            <a class="sidebar-brand" href="index.php">
                <span class="align-middle">Administrador</span>
            </a>
            <ul class="sidebar-nav">
                <li class="sidebar-header">Páginas</li>
                <li class="sidebar-item"><a class="sidebar-link" href="index.php"><i data-feather="sliders"></i>Panel</a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="perfil.php"><i data-feather="user"></i>Perfil</a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="usuarios.php"><i data-feather="users"></i>Usuarios</a></li>
                <li class="sidebar-item active"><a class="sidebar-link" href="reservas.php"><i data-feather="book"></i>Reservas</a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="prestamos.php"><i data-feather="book-open"></i>Préstamos</a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="informes.php"><i data-feather="file-text"></i>Informes</a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="notificaciones.php"><i data-feather="bell"></i>Notificaciones</a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="configuracion.php"><i data-feather="settings"></i>Configuración</a></li>
            </ul>
        </div>
    </nav>

    <!-- ======== CONTENIDO PRINCIPAL ======== -->
    <div class="main">
        <main class="content">
            <div class="container-fluid p-0">
                <h1 class="h3 mb-3">Reservas</h1>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Lista de Reservas</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Usuario</th>
                                    <th>Libro</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($resultado && mysqli_num_rows($resultado) > 0) {
                                    while ($fila = mysqli_fetch_assoc($resultado)) {
                                        echo "<tr>";
                                        echo "<td>{$fila['idReserva']}</td>";
                                        echo "<td>{$fila['usuario']}</td>";
                                        echo "<td>{$fila['libro']}</td>";
                                        echo "<td>{$fila['fechaReserva']}</td>";
                                        echo "<td>{$fila['estadoReserva']}</td>";
                                        echo "<td>
                                                <a href='../CONTROLLER/aceptarReserva.php?id={$fila['idReserva']}' class='btn btn-success btn-sm'>Aceptar</a>
                                                <a href='../CONTROLLER/rechazarReserva.php?id={$fila['idReserva']}' class='btn btn-danger btn-sm'>Rechazar</a>
                                              </td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='6' class='text-center'>No hay reservas registradas.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="../ASSETS/JS/app.js"></script>
</body>
</html>

<?php $mysql->desconectar(); ?>
