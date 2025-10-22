<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Gestión de Libros</title>
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

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="index.php">
                            <i class="align-middle" data-feather="sliders"></i>
                            <span class="align-middle">Panel</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="perfil.php">
                            <i class="align-middle" data-feather="user"></i>
                            <span class="align-middle">Perfil</span>
                        </a>
                    </li>

                    <li class="sidebar-header">Herramientas y componentes</li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="usuarios.php">
                            <i class="align-middle" data-feather="users"></i>
                            <span class="align-middle">Usuarios</span>
                        </a>
                    </li>

                    <!-- 🔹 Marcamos Libros como activo -->
                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="libros.php">
                            <i class="align-middle" data-feather="book"></i>
                            <span class="align-middle">Libros</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="reservas.php">
                            <i class="align-middle" data-feather="bookmark"></i>
                            <span class="align-middle">Reservas</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="prestamos.php">
                            <i class="align-middle" data-feather="book-open"></i>
                            <span class="align-middle">Préstamos</span>
                        </a>
                    </li>

                    <li class="sidebar-header">Reportes y Configuración</li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="informes.php">
                            <i class="align-middle" data-feather="file-text"></i>
                            <span class="align-middle">Informes</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="notificaciones.php">
                            <i class="align-middle" data-feather="bell"></i>
                            <span class="align-middle">Notificaciones</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="configuracion.php">
                            <i class="align-middle" data-feather="settings"></i>
                            <span class="align-middle">Configuración</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- ======== CONTENIDO PRINCIPAL ======== -->
        <div class="main">
            <main class="content">
                <div class="container-fluid p-0">
                    <h1 class="h3 mb-3">Gestión de Libros</h1>

                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Lista de libros</h5>
                            <a href="crearLibro.php" class="btn btn-primary btn-sm">+ Crear Libro</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Título</th>
                                        <th>Autor</th>
                                        <th>ISBN</th>
                                        <th>Categoria Libro</th>
                                        <th>Diponibilidad Libro</th>
                                        <th>cantidad Libro</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require_once("../MODEL/MySQL.php");
                                    $mysql = new MySQL();
                                    $mysql->conectar();
                                    $conexion = $mysql->getConnection();

                                    // ⚙️ Ajusta el nombre de tu tabla y columnas según tu base de datos
                                    $query = "SELECT * FROM libro";
                                    $resultado = mysqli_query($conexion, $query);

                                    if (!$resultado) {
                                        die("❌ Error en la consulta: " . mysqli_error($conexion));
                                    }


                                    if (mysqli_num_rows($resultado) > 0) {
                                        while ($fila = mysqli_fetch_assoc($resultado)) {
                                            echo "<tr>";
                                            echo "<td>{$fila['idLibro']}</td>";
                                            echo "<td>{$fila['tituloLibro']}</td>";
                                            echo "<td>{$fila['autorLibro']}</td>";
                                            echo "<td>{$fila['ISBN']}</td>";
                                            echo "<td>{$fila['categoriaLibro']}</td>";
                                            echo "<td>{$fila['disponibilidadLibro']}</td>";
                                            echo "<td>{$fila['cantidadLibro']}</td>";
                                            echo "<td>
                                                    <a href='editarLibro.php?id={$fila['idLibro']}' class='btn btn-warning btn-sm'>Editar</a>
                                                    <a href='eliminarLibro.php?id={$fila['idLibro']}' class='btn btn-danger btn-sm' onclick='return confirm(\"¿Seguro que deseas eliminar este libro?\")'>Eliminar</a>
                                                  </td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='6' class='text-center'>No hay libros registrados</td></tr>";
                                    }

                                    $mysql->desconectar();
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