<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Perfil del administrador - Sistema de Biblioteca" />
  <meta name="author" content="Cristoffer Jaramillo" />

  <title>Biblioteca - Perfil</title>

  <link rel="shortcut icon" href="../ASSETS/IMG/icono.png" />
  <link href="../ASSETS/CSS/app.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar" class="sidebar js-sidebar">
      <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.php">
          <span class="align-middle">Administrador</span>
        </a>

        <ul class="sidebar-nav">
          <li class="sidebar-header">Páginas</li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="index.php">
              <i class="align-middle" data-feather="home"></i>
              <span class="align-middle">Dashboard</span>
            </a>
          </li>

          <li class="sidebar-item active">
            <a class="sidebar-link" href="perfil.php">
              <i class="align-middle" data-feather="user"></i>
              <span class="align-middle">Perfil</span>
            </a>
          </li>

          <li class="sidebar-header">Gestión del Sistema</li>

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
              <i class="align-middle" data-feather="calendar"></i>
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
              <i class="align-middle" data-feather="bar-chart-2"></i>
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
    <!-- /Sidebar -->

    <!-- Contenido principal -->
    <div class="main">
      <main class="content">
        <div class="container-fluid p-0">
          <h1 class="h3 mb-3"><strong>Perfil de Usuario</strong></h1>

          <div class="row">
            <div class="col-md-8 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title mb-0">Información del Administrador</h5>
                </div>
                <div class="card-body">
                  <div class="text-center mb-3">
                    <h5 class="mt-2 mb-0">Usuario</h5>
                    <p class="text-muted mb-0">Administrador del sistema</p>
                  </div>

                  <hr>

                  <div class="mb-3">
                    <label class="form-label">Nombre Completo</label>
                    <input type="text" class="form-control" value="Nombre" readonly>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" value="correo@example.com" readonly>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Rol</label>
                    <input type="text" class="form-control" value="Administrador" readonly>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Fecha de Registro</label>
                    <input type="text" class="form-control" value="15/03/2025" readonly>
                  </div>

                  <div class="text-center">
                    <a href="editar_perfil.php" class="btn btn-primary">Editar Perfil</a>
                    <a href="configuracion.php" class="btn btn-secondary">Configuración</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </main>

      <!-- Footer -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row text-muted">
            <div class="col-6 text-start">
              <p class="mb-0">
                <strong>Sistema Biblioteca</strong> &copy; 2025
              </p>
            </div>
            <div class="col-6 text-end">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="text-muted" href="#">Ayuda</a>
                </li>
                <li class="list-inline-item">
                  <a class="text-muted" href="#">Soporte</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- /Contenido principal -->
  </div>

  <script src="../ASSETS/JS/app.js"></script>
</body>

</html>
