<!DOCTYPE html>
<html lang="en">
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

                    <!--Aquí marcamos perfil como activo -->
                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="perfil.php">
                            <i class="align-middle" data-feather="book"></i>
                            <span class="align-middle">Perfil</span>
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
                    <h1 class="h3 mb-3">Perfil</h1>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Perfil</h5>
                                </div>
                                <div class="card-body">
                                    <!-- Aquí puedes poner tu tabla de libros o formulario -->
                                    <p>Desde aquí puedes editar el perfil.</p>
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
