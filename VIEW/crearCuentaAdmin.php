<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Gestión de usuarios - Sistema de Biblioteca">
  <meta name="author" content="AdminKit">

  <title>Crear Usuario | Biblioteca</title>

  <link rel="shortcut icon" href="../ASSETS/IMG/icono.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../ASSETS/CSS/app.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
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

          <li class="sidebar-item">
            <a class="sidebar-link" href="perfil.php">
              <i class="align-middle" data-feather="user"></i>
              <span class="align-middle">Perfil</span>
            </a>
          </li>

          <li class="sidebar-header">Gestión del Sistema</li>

          <li class="sidebar-item active">
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

    <!-- Main -->
    <div class="main">
      <nav class="navbar navbar-expand navbar-light navbar-bg">
        <a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>
      </nav>

      <main class="content">
        <div class="container-fluid p-0">
          <h1 class="h3 mb-3"><strong>Crear Nuevo Usuario</strong></h1>

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h5 class="card-title mb-0">Formulario de Registro</h5>
                  <a href="usuarios.php" class="btn btn-outline-primary btn-sm">← Volver a usuarios</a>
                </div>

                <div class="card-body">
                  <!-- Formulario -->
                  <form id="formularioCrearUsuarios">
                    <label for="">Nombre completo</label>
                    <input type="text" class="form-control mb-3" placeholder="Ingrese sus nombres" name="nombreUsuario">

                    <label for="">Apellidos</label>
                    <input type="text" class="form-control mb-3" placeholder="Ingrese sus apellidos" name="apellidoUsuario">

                    <label for="">Email</label>
                    <input type="email" class="form-control mb-3" placeholder="Ingrese su correo" name="emailUsuario">

                    <label for="">Contraseña</label>
                    <input type="password" class="form-control mb-3" placeholder="Ingrese su contraseña" name="contrasenaUsuario">

                    <label for="">Rol</label>
                    <select class="form-select mb-3" name="rol">
                      <option selected disabled>Seleccione una opción</option>
                      <option value="administrador">Administrador</option>
                      <option value="cliente">Cliente</option>
                    </select>

                    <button type="submit" class="btn btn-success">Crear Usuario</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
      </main>

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
                  <a class="text-muted" href="#">Soporte</a>
                </li>
                <li class="list-inline-item">
                  <a class="text-muted" href="#">Ayuda</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- /Main -->
  </div>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="../ASSETS/JS/alertaCrearUsuario.js"></script>
  <script src="../ASSETS/JS/app.js"></script>
</body>
</html>
