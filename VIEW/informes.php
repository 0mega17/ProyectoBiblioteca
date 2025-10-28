<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Informes | Biblioteca</title>
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

                    <li class="sidebar-item">
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

                    <li class="sidebar-item active">
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
                    <h1 class="h3 mb-3">Generación de Informes</h1>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Filtrar y generar informes</h5>
                                </div>
                                <div class="card-body">

                                    <!-- Formulario para generar informe -->
                                    <form id="formInforme" action="../CONTROLLER/informesController.php" method="GET" target="_blank">
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <label for="tipo_informe" class="form-label">Tipo de informe:</label>
                                                <select id="tipo_informe" name="tipo" class="form-select" required>
                                                    <option value="">Seleccione un tipo</option>
                                                    <option value="libros">Inventario de libros</option>
                                                    <option value="prestamos">Historial de préstamos</option>
                                                    <option value="reservas">Historial de reservas</option>
                                                    <option value="usuarios">Listado de usuarios</option>
                                                </select>
                                            </div>

                                            <div class="col-md-3">
                                                <label for="formato" class="form-label">Formato:</label>
                                                <select id="formato" name="formato" class="form-select" required>
                                                    <option value="pdf">PDF</option>
                                                    <option value="excel">Excel</option>
                                                </select>
                                            </div>

                                            <div class="col-md-3">
                                                <label for="fecha_inicio" class="form-label">Desde:</label>
                                                <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control">
                                            </div>

                                            <div class="col-md-3">
                                                <label for="fecha_fin" class="form-label">Hasta:</label>
                                                <input type="date" id="fecha_fin" name="fecha_fin" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-md-12 text-center">
                                                <button type="submit" class="btn btn-primary w-25">Generar informe</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>

    <script src="../ASSETS/JS/app.js"></script>
</body>
</html>
