<?php
session_start();

// Datos del usuario desde la sesión
$usuario = [
    'idUsuario' => $_SESSION['idUsuario'] ?? '',
    'nombreUsuario' => $_SESSION['nombreUsuario'] ?? '',
    'apellidoUsuario' => $_SESSION['apellidoUsuario'] ?? '',
    'emailUsuario' => $_SESSION['emailUsuario'] ?? '',
    'tipouUsuario' => $_SESSION['tipouUsuario'] ?? ''
];
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Perfil del usuario - Sistema de Biblioteca" />
  <meta name="author" content="Cristoffer Jaramillo" />

  <title>Biblioteca - Perfil</title>

  <link rel="shortcut icon" href="../ASSETS/IMG/icono.png" />
  <link href="../ASSETS/CSS/app.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />

  <style>
    .btn-ocean {
      background-color: #0077b6;
      color: white;
      border-radius: 10px;
      font-weight: 600;
      padding: 10px 25px;
      border: none;
      transition: 0.3s;
    }

    .btn-ocean:hover {
      background-color: #0096c7;
    }

    .btn-logout {
      background-color: #6c757d;
      color: white;
      border-radius: 10px;
      font-weight: 600;
      padding: 10px 25px;
      border: none;
      transition: 0.3s;
    }

    .btn-logout:hover {
      background-color: #495057;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar" class="sidebar js-sidebar">
      <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.php">
          <span class="align-middle">Biblioteca</span>
        </a>

        <ul class="sidebar-nav">
          <li class="sidebar-header">Páginas</li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="index.php">
              <i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboard</span>
            </a>
          </li>

          <li class="sidebar-item active">
            <a class="sidebar-link" href="perfil.php">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Perfil</span>
            </a>
          </li>

          <li class="sidebar-header">Gestión</li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="usuarios.php">
              <i class="align-middle" data-feather="users"></i> <span class="align-middle">Usuarios</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="libros.php">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Libros</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="reservas.php">
              <i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Reservas</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="prestamos.php">
              <i class="align-middle" data-feather="book-open"></i> <span class="align-middle">Préstamos</span>
            </a>
          </li>

          <li class="sidebar-header">Configuración</li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="informes.php">
              <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Informes</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="configuracion.php">
              <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Configuración</span>
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
          <h1 class="h3 mb-3"><strong>Perfil del Usuario</strong></h1>

          <div class="row">
            <div class="col-md-8 col-lg-6">
              <div class="card">
                <div class="card-header bg-primary text-white">
                  <h5 class="card-title mb-0">Información del Usuario</h5>
                </div>
                <div class="card-body">
                  <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" value="<?= htmlspecialchars($usuario['nombreUsuario']) ?>" readonly>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Apellido</label>
                    <input type="text" class="form-control" value="<?= htmlspecialchars($usuario['apellidoUsuario']) ?>" readonly>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" value="<?= htmlspecialchars($usuario['emailUsuario']) ?>" readonly>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Rol</label>
                    <input type="text" class="form-control" value="<?= ($usuario['tipouUsuario'] == 1) ? 'Administrador' : 'Usuario' ?>" readonly>
                  </div>

                  <div class="text-center mt-4">
                    <a href="editarUSuarios.php" class="btn btn-ocean me-2">Editar Perfil</a>
                    <a href="login.php" class="btn btn-logout">Cerrar Sesión</a>
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
  </div>

  <script src="../ASSETS/JS/app.js"></script>
</body>

</html>
